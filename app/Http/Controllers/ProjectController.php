<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        // Mengambil semua gambar dan video yang ada
        $images1 = explode(',' , $project->gambar_1);

        $images2 = explode(',' , $project->gambar_2);


        $videos = explode(',', $project->video);

        return view('detail', compact('project', 'images1', 'images2', 'videos'));
    }
}
