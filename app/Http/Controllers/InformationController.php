<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCvRequest;
use App\Http\Requests\UpdateInformationRequest;
use App\Models\File;
use App\Models\Social;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
  /**
   * Get all of the information.
   */
  public function index()
  {
    $social_links = Social::all();

    return view('pages.contact', compact('social_links'));
  }

  /**
   * Store a new record.
   */
  public function store()
  {
    //
  }

  /**
   * Edit a specific record
   */
  public function edit(UpdateInformationRequest $request)
  {
    // TEST:
    // dd($request->all());

    // dd(Social::first()->email);

    $social = Social::first();
    // Remove _token and _method from request
    $data = $request->except(['_token', '_method']);

    // Filter out empty values so they don’t overwrite existing DB values
    $data = array_filter($data, fn($value) => !is_null($value) && $value !== '');

    // Update only provided fields
    if ($social) {
      $social->update($data);
    } else {
      Social::create($data);
    }


    return redirect()->back()->with('links_success', 'Social links updated successfully!');
  }

  /**
   * Edit the CV file
   */
  public function edit_CV(UpdateCvRequest $request)
  {
    // TEST: debug
    // dd($request->file('cvFile'));

    /**
     * We will use here a "replace-style upload"
     */

    // 1. Delete old record (if exists)
    $oldFile = File::first();
    if ($oldFile) {
      // Delete the old file from storage
      Storage::disk('public')->delete($oldFile->cv_link);

      // Delete the record
      $oldFile->delete();
    }

    // 2. Upload new file
    // Get the uploaded file
    $file = $request->file('cvFile');

    // Get the original filename
    $originalName = $file->getClientOriginalName();

    // Store the file with the same name inside "uploads" directory
    $path = $file->storeAs('uploads/cv', $originalName, 'public');

    // dd($path);

    // 3. Save new record
    $newFile = new File();
    $newFile->cv_link = $path;
    $newFile->save();

    return back()->with('file_success', 'File uploaded and saved successfully!');
  }
  /**
   * Delete a specific record.
   */
  public function destroy_CV($id)
  {
    // 1. Delete record (if exists)
    $file = File::find($id);

    if ($file) {
      // dd($file->cv_link);

      // Delete the file from storage
      Storage::disk('public')->delete($file->cv_link);
      // Delete the record
      $file->delete();

      return redirect()->back()->with('cv_delete', 'CV file deleted successfully.');
    }
  }
}
