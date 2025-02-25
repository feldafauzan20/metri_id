<?php

namespace App\Http\Controllers;

use App\Models\MetriLandingPage;
use Illuminate\Http\Request;

class MetriLandingPageController extends Controller
{
    public function index()
    {
        // Mengambil data video terbaru dari model MetriLandingPage
        $video = MetriLandingPage::latest()->value('video');

        // Mengembalikan view dengan data video
        return view('welcome', ['video' => $video]);
    }
}
