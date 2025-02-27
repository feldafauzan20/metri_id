<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetriPostPostController extends Controller
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
        $data = MetriPostPost::latest()->first([
            'youtube_link',
            'video',
            'photo_1',
            'photo_2',
            'photo_3',
            'photo_4',
            'photo_5',
        ]);

        // Kirim ke view dengan nilai default jika null
        return view('metri-post-post', [
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