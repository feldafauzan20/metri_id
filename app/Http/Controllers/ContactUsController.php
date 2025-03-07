<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactUsController extends Controller
{
    public function index()
    {
        $contacts = ContactUs::latest()->get(); // Ambil semua data ContactUs terbaru
        return view('contact_us', compact('contacts'));
    }
}
