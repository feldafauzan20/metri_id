<?php

namespace App\Http\Controllers;

use App\Models\MetriEvent;
use Illuminate\Http\Request;
class MetriEventController extends Controller
{
    public function index()
    {
        // Ambil data terbaru dari database
        $data = MetriEvent::latest()->first([
            'youtube_link',
            'video',
            'photo_1',
            'photo_2',
            'photo_3',
            'photo_4',
            'photo_5',
        ]);

        // Konversi link YouTube menjadi embed link (jika ada)
        $embed_link = null;
        if (!empty($data->youtube_link) && preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $data->youtube_link, $matches)) {
            $embed_link = 'https://www.youtube.com/embed/' . $matches[1];
        }

        // Kirim ke view dengan nilai default jika null
        return view('service-event', [
            'youtube_link' => $embed_link ?? null,
            'video'        => $data->video ?? null,
            'photo_1'      => $data->photo_1 ?? null,
            'photo_2'      => $data->photo_2 ?? null,
            'photo_3'      => $data->photo_3 ?? null,
            'photo_4'      => $data->photo_4 ?? null,
            'photo_5'      => $data->photo_5 ?? null,
        ]);
    }
}