<?php

namespace App\Http\Controllers;

use App\Models\MetriDigital;
use Illuminate\Http\Request;



class MetriDigitalController extends Controller
{
    public function index()
    {
        // Ambil data terbaru dari database
        $data = MetriDigital::latest()->first();
    
        // Pastikan ada data sebelum mengambil nilai
        $youtube_link = $data->youtube_link ?? null;
        $video = $data->video ?? null;
        $photo_1 = $data->photo_1 ?? null;
        $photo_2 = $data->photo_2 ?? null;
        $photo_3 = $data->photo_3 ?? null;
        $photo_4 = $data->photo_4 ?? null;
        $photo_5 = $data->photo_5 ?? null;
    
        // Konversi link YouTube menjadi embed link (jika ada)
        $embed_link = null;
        if (!empty($data->youtube_link) && preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $data->youtube_link, $matches)) {
            $embed_link = 'https://www.youtube.com/embed/' . $matches[1];
        }
    
        // Kirim data ke view
        return view('service-digital', compact(
            'youtube_link', 'video', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5', 'embed_link'
        ));
    }
    
}
