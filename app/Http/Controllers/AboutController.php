<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $data = About::latest()->first();

        $photos_2 = explode(',' , $data->photo_2);


        $videos = explode(',', $data->video);

        return view('about', compact('videos', 'photos_2'));
        

        
    }
}

