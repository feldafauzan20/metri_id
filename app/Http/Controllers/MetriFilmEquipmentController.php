<?php

namespace App\Http\Controllers;

use App\Models\MetriFilmEquipment;
use Illuminate\Http\Request;

class MetriFilmEquipmentController extends Controller
{
    public function index()
    {
        // Konversi link YouTube menjadi embed link (jika ada)
        $embed_link = null;
        if (!empty($data->link) && preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $data->link, $matches)) {
            $embed_link = 'https://www.youtube.com/embed/' . $matches[1];
        }
        
        // Ambil data terbaru dari database
        $youtube_link = MetriFilmEquipment::latest()->value('youtube_link');
        $video = MetriFilmEquipment::latest()->value('video');
        $photo_1 = MetriFilmEquipment::latest()->value('photo_1');
        $photo_2 = MetriFilmEquipment::latest()->value('photo_2');
        $photo_3 = MetriFilmEquipment::latest()->value('photo_3');
        $photo_4 = MetriFilmEquipment::latest()->value('photo_4');
        $photo_5 = MetriFilmEquipment::latest()->value('photo_5');

        // Kirim ke view
        return view('service-tang-ting', compact('youtube_link', 'video', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5'));
    }
}