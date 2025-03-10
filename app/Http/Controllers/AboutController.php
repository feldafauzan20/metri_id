<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::latest()->first();

        $video = $data['video'] ?? null;
        $photo_2 = $data['photo_2'] ?? null;

        return view('about', compact('video', 'photo_2'));
        
    }
}

