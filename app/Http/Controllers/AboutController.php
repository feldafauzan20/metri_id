<?php

namespace App\Http\Controllers;

use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $about = About::first(); // Ambil data pertama dari tabel About
        return view('about', compact('about'));
    }
}
