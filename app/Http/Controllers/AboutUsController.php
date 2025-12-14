<?php

namespace App\Http\Controllers;

use App\Models\About;

class AboutUsController extends Controller
{
    public function index()
    {
        $about = About::first(); // isi dari DB
        return view('aboutus', compact('about'));
    }
}
