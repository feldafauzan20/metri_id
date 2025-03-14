<?php

namespace App\Http\Controllers;

use App\Models\MetriLandingPage;
use Illuminate\Http\Request;

class MetriLandingPageController extends Controller
{
    public function index()
    {
        // Ambil data terbaru dari database
        $latestData = MetriLandingPage::latest()->first();

        // Pastikan ada data sebelum mengakses propertinya
        if (!$latestData) {
            return view('welcome', [
                'videos' => [],
                'youtube_links' => [],
            ]);
        }

        // Ambil video dan YouTube link dari database lalu explode
        $videos = $latestData->video ? explode(',', $latestData->video) : [];
        $youtube_links = $latestData->youtube_link ? explode(',', $latestData->youtube_link) : [];

        // Konversi setiap link YouTube menjadi embed link dengan autoplay dan tanpa watermark
        foreach ($youtube_links as &$link) {
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
        $youtube_links = array_filter($youtube_links);

        // Kirim ke view
        return view('welcome', compact('videos', 'youtube_links'));
    }
}