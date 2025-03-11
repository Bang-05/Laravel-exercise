<?php

namespace App\Http\Controllers;

use App\Models\Slides;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        return view ('master');
    }
    public function index() {
        return view ('pages.trangchu-1');
    }
    public function getSlide() {
        $slide = Slides::all();
        return view('pages.trangchu', compact('slide'));
    }
}
