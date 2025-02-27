<?php

namespace App\Http\Controllers;

use App\Models\MetriDesign;
use Illuminate\Http\Request;

class MetriDesignController extends Controller
{
    public function index()
    {
        // Ubah link menjadi format embed untuk YouTube
        foreach ($posts as $post) {
            if (!empty($post->link) && preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $post->link, $matches)) {
                $post->embed_link = 'https://www.youtube.com/embed/' . $matches[1];
            } else {
                $post->embed_link = null; // Jika bukan YouTube, kosongkan
            }
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
        return view('metri-design', compact('youtube_link', 'video', 'photo_1', 'photo_2', 'photo_3', 'photo_4', 'photo_5'));
    }
}