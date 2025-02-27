<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetriEventPostController extends Controller
{
    public function index()
    {   
        // Konversi link YouTube menjadi embed link (jika ada)
        $embed_link = null;
        if (!empty($data->link) && preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $data->link, $matches)) {
            $embed_link = 'https://www.youtube.com/embed/' . $matches[1];
        }
        // Ambil data terbaru dari database
        $data = MetriEventPost::latest()->first([
            'youtube_link',
            'video',
            'photo_1',
            'photo_2',
            'photo_3',
            'photo_4',
            'photo_5',
        ]);

        // Kirim ke view dengan nilai default jika null
        return view('metri-event-post', [
            'youtube_link' => $data->youtube_link ?? null,
            'video'        => $data->video ?? null,
            'photo_1'      => $data->photo_1 ?? null,
            'photo_2'      => $data->photo_2 ?? null,
            'photo_3'      => $data->photo_3 ?? null,
            'photo_4'      => $data->photo_4 ?? null,
            'photo_5'      => $data->photo_5 ?? null,
        ]);
    }
}
