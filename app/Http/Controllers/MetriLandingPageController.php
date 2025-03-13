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

        // Konversi setiap link YouTube menjadi embed link jika formatnya valid
        foreach ($youtube_links as &$link) {
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $link, $matches)) {
                $link = 'https://www.youtube.com/embed/' . $matches[1];
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
