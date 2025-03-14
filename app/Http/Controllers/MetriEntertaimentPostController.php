<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\MetriEntertainmentPost;
class MetriEntertaimentPostController extends Controller
{
    public function index()
    {
        // Ambil data terbaru dari database
        $data = MetriEntertainmentPost::latest()->first([
            'youtube_link',
            'image',
            'video',
            'photo_1',
            'photo_2',
            'photo_3',
            'photo_4',
            'photo_5',
        ]);

        // Pastikan youtube_link adalah array sebelum dipecah
        $youtube_link = !empty($data->youtube_link) ? explode(',', $data->youtube_link) : [];

        // Pastikan video juga dipecah menjadi array jika berisi data
        $video = !empty($data->video) ? explode(',', $data->video) : [];

// Konversi setiap link YouTube menjadi embed link dengan autoplay dan tanpa watermark
        foreach ($youtube_link as &$link) {
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $link, $matches)) {
                $videoId = $matches[1];
                // Enhanced parameters for better cross-device compatibility
                $params = [
                    'autoplay' => 1,            // Attempt autoplay
                    'modestbranding' => 1,      // Minimal YouTube branding
                    'rel' => 0,                 // Don't show related videos
                    'controls' => 1,            // Keep controls for better user experience
                    'showinfo' => 0,            // Hide video title and uploader info
                    'mute' => 1,                // Mute by default (helps with autoplay policies)
                    'playsinline' => 1,          // Plays inline on iOS (instead of fullscreen)
                ];
                $link = "https://www.youtube.com/embed/{$videoId}?" . http_build_query($params);
            } else {
                $link = null; // Jika bukan link valid, jadikan null
            }
        }
        // Hapus elemen null dalam array
        $youtube_link = array_filter($youtube_link);

        // Kirim ke view dengan nilai default jika null
        return view('detail-entertainment', [
            'youtube_link' => $embed_link ?? null,
            'image'        => $data->image ?? null,
            'video'        => $data->video ?? null,
            'photo_1'      => $data->photo_1 ?? null,
            'photo_2'      => $data->photo_2 ?? null,
            'photo_3'      => $data->photo_3 ?? null,
            'photo_4'      => $data->photo_4 ?? null,
            'photo_5'      => $data->photo_5 ?? null,
        ]);
    }
}