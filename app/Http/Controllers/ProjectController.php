<?php

namespace App\Http\Controllers;

use App\Models\Project;


class ProjectController extends Controller
{
    public function index()
    {
        $projects = Project::all();
        return view('gallery', compact('projects'));
    }

    public function show($type, $slug)
    {
        $project = Project::where('service_type', $type)->where('slug', $slug)->firstOrFail();
    
        $videos = explode(',', $project->video);

    
        return view('detail', compact('project', 'videos'));
    }
    
}
