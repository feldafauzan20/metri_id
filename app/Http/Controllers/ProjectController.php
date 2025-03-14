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
        $images1 = explode(',', $project->gambar_1 ?? '');
        $images2 = explode(',', $project->gambar_2 ?? '');

        // Mengambil semua video yang ada
        $videos = explode(',', $project->video ?? '');

        // Mengambil semua link yang ada
        $links = explode(',', $project->link ?? '');

        // Pastikan array $links tidak kosong sebelum memproses
        $youtube_links = [];
        foreach ($links as $link) {
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $link, $matches)) {
                $videoId = $matches[1];
                // Enhanced parameters for better cross-device compatibility
                $params = [
                    'autoplay' => 1,            // Attempt autoplay
                    'modestbranding' => 1,      // Minimal YouTube branding
                    'rel' => 0,                 // Don't show related videos
                    'controls' => 1,            // Keep controls for better user experience
                    'mute' => 1,                // Mute by default (helps with autoplay policies)
                    'playsinline' => 1          // Plays inline on iOS (instead of fullscreen)
                ];
                $youtube_links[] = "https://www.youtube.com/embed/{$videoId}?" . http_build_query($params);
            }
        }

        // Pastikan tidak ada elemen null dalam array
        $youtube_links = array_filter($youtube_links);

        return view('detail', compact('project', 'images1', 'images2', 'videos', 'links', 'youtube_links'));
    }
}