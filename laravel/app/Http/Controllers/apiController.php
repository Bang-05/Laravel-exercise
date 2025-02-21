<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class apiController extends Controller
{
    public function getData() {
        $reponse = Http::get('http://api.com/summary');
        $data = $reponse -> json();
        return view('index') -> with('data', $data);
    }
}
