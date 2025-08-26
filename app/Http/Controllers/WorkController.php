<?php

namespace App\Http\Controllers;

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
  public function store()
  {
    //
  }
}
