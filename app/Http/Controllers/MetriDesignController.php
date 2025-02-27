<?php

namespace App\Http\Controllers;

use App\Models\MetriDesign;
use Illuminate\Http\Request;

class MetriDesignController extends Controller
{
    public function index()
    {
        // Konversi link YouTube menjadi embed link (jika ada)
        $embed_link = null;
        if (!empty($data->link) && preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $data->link, $matches)) {
            $embed_link = 'https://www.youtube.com/embed/' . $matches[1];
        }
        
        // Ambil data terbaru dari database
        $youtube_link = MetriDesign::latest()->value('youtube_link');
        $video = MetriDesign::latest()->value('video');
        $photo_1 = MetriDesign::latest()->value('photo_1');
        $photo_2 = MetriDesign::latest()->value('photo_2');
        $photo_3 = MetriDesign::latest()->value('photo_3');
        $photo_4 = MetriDesign::latest()->value('photo_4');
        $photo_5 = MetriDesign::latest()->value('photo_5');

        // Kirim ke view
        return view('service-design', compact('youtube_link', 'video', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5'));
    }
}