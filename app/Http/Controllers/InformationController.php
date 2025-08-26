<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateCvRequest;
use App\Models\File;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class InformationController extends Controller
{
  /**
   * Get all of the information.
   */
  public function index()
  {
    //
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
  public function edit(Request $request)
  {
    dd($request);
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
  public function destroy(Request $request)
  {
    //
  }
}
