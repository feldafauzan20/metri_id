<?php

namespace App\Http\Controllers;

use App\Models\MetriLandingPage;
use Illuminate\Http\Request;

class MetriLandingPageController extends Controller
{
    public function index()
    {
        // Ambil data video terbaru dari database
        $video = MetriLandingPage::latest()->value('video');

        // Ambil data counter dari database
        $counter_1 = MetriLandingPage::latest()->value('counter_1') ?? 0;
        $counter_2 = MetriLandingPage::latest()->value('counter_2') ?? 0;
        $counter_3 = MetriLandingPage::latest()->value('counter_3') ?? 0;
        $counter_4 = MetriLandingPage::latest()->value('counter_4') ?? 0;

        // Kirim ke view
        return view('welcome', compact('video', 'counter_1', 'counter_2', 'counter_3', 'counter_4'));
    }
}
