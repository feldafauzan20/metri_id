<?php

namespace App\Http\Controllers;

use App\Models\MetriLandingPage;
use Illuminate\Http\Request;

class MetriLandingPageController extends Controller
{
    public function index()
    {
        // Fetch data dari model MetriLandingPage
        $video = MetriLandingPage::latest()->value('video'); 

        // Mengembalikan view dengan data video
        return view('welcome', compact('video'));
    }
}