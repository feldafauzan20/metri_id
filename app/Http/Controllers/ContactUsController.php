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

        // Konversi setiap link YouTube menjadi embed link dengan autoplay dan tanpa watermark
        foreach ($youtube_link as &$link) {
            if (preg_match('/(?:youtube\.com\/watch\?v=|youtu\.be\/)([a-zA-Z0-9_-]+)/', $link, $matches)) {
                $videoId = $matches[1];
                // Enhanced parameters for better cross-device compatibility
                $params = [
                    'autoplay' => 1,            // Attempt autoplay
                    'modestbranding' => 1,      // Minimal YouTube branding
                    'rel' => 0,                 // Don't show related videos
                    'controls' => 1,            // Keep controls for better user experience
                    'showinfo' => 0,            // Hide video title and uploader info
                    'mute' => 1,                // Mute by default (helps with autoplay policies)
                    'playsinline' => 1,          // Plays inline on iOS (instead of fullscreen)
                ];
                $link = "https://www.youtube.com/embed/{$videoId}?" . http_build_query($params);
            } else {
                $link = null; // Jika bukan link valid, jadikan null
            }
        }
        // Hapus elemen null dalam array
        $youtube_links = array_filter($youtube_link);

        return view('contact', compact('video', 'youtube_link'));
    }
}