<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $data = ContactUs::latest()->first();

        // Pisahkan video dan link YouTube menjadi array
        $video = !empty($data->video) ? explode(',', $data->video) : [];
        $youtube_link = !empty($data->youtube_link) ? explode(',', $data->youtube_link) : [];

        // Konversi setiap link YouTube menjadi embed link
        foreach ($youtube_link as &$link) {
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $link, $matches)) {
                $link = 'https://www.youtube.com/embed/' . $matches[1];
            }
        }

        return view('contact', compact('video', 'youtube_link'));
    }
}
