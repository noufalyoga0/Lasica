<?php

namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index() {
        $reviews = Review::all();
        return view('testimoni', compact('reviews'));
    }
}