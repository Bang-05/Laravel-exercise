<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function getIndex() {
        return view ('master');
    }
    public function index() {
        return view ('pages.trangchu-1');
    }
}
