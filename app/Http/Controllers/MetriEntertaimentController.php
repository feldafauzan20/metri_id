<?php

namespace App\Http\Controllers;

use App\Models\MetriEntertainment;
use Illuminate\Http\Request;

class MetriEntertaimentController extends Controller
{
    public function index()
    {
        // Konversi link YouTube menjadi embed link (jika ada)
        $embed_link = null;
        if (!empty($data->link) && preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $data->link, $matches)) {
            $embed_link = 'https://www.youtube.com/embed/' . $matches[1];
        }
        
        // Ambil data terbaru dari database
        $youtube_link = MetriEntertainment::latest()->value('youtube_link');
        $video = MetriEntertainment::latest()->value('video');
        $photo_1 = MetriEntertainment::latest()->value('photo_1');
        $photo_2 = MetriEntertainment::latest()->value('photo_2');
        $photo_3 = MetriEntertainment::latest()->value('photo_3');
        $photo_4 = MetriEntertainment::latest()->value('photo_4');
        $photo_5 = MetriEntertainment::latest()->value('photo_5');

        // Kirim ke view
        return view('service-entertainment', compact('youtube_link', 'video', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5'));
    }
}