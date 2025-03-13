<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class ProjectController extends Controller
{
    public function show($slug)
    {
        $project = Project::where('slug', $slug)->firstOrFail();

        // Mengambil semua gambar yang ada
        $images1 = explode(',', $project->gambar_1);
        $images2 = explode(',', $project->gambar_2);

        // Mengambil semua video yang ada
        $videos = explode(',', $project->video);

        // Mengambil semua link yang ada
        $links = explode(',', $project->link);

        // Konversi link YouTube menjadi embed jika valid
        foreach ($links as &$link) {
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $link, $matches)) {
                $link = 'https://www.youtube.com/embed/' . $matches[1];
            }
        }
        // Hapus elemen null dalam array
        $links = array_filter($links);

        return view('detail', compact('project', 'images1', 'images2', 'videos', 'links'));
    }
}
