<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Listing;
use App\Models\Project;

class ProjectsController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::get();

        return view('frontend.projectsIndex', compact('projects'));
    }    
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function upcoming()
    {
        $projects = Project::where('upcoming',true)->get();

        return view('frontend.projectsUpcoming', compact('projects'));
    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function show($projectId)
    {
        $project = Project::find($projectId);
        if (!isset($project)) return 'Something went wrong. Please contact admin.';

        return view('frontend.projectsShow', compact('project'));
    }

}
