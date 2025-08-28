<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreProjectRequest;
use App\Models\Project;
use Illuminate\Http\Request;

class WorkController extends Controller
{
  /**
   * Get all of the records
   */
  public function index()
  {
    $projects = Project::all();

    return view('pages.work', compact('projects'));
  }


  /**
   * Store a new record.
   */
  public function store(StoreProjectRequest $request)
  {
    // dd($request->all());

    $data = $request->except(['_token']);

    // Get the photo and save it in /storage/public/projects
    // Get the uploaded file
    $image = $data['imgSrc'];
    // dd($image);

    // Get the original filename
    $originalName = $image->getClientOriginalName();

    // Store the file with the same name inside "uploads" directory
    $path = $image->storeAs('uploads/projects', $originalName, 'public');

    // Get the link and save it intp the DB.

    Project::create([
      'title' => $data['title'],
      'online_link' => $data['online_link'],
      'imgSrc' => $path
    ]);

    return redirect()->back()->with('project_success', 'Project created successfully!');
  }


  /**
   * Edit a specific record.
   */
  public function edit(Request $request, $id)
  {
    return 'Item ' . $id;
  }
}
