<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\view;

class sumAController extends Controller
{
    public function sumA (Request $request){
        $num1 = $request -> input("number1");
        $num2 = $request -> input("number2");
        $sum = $num1 + $num2;
        return view("sum", ['sum'=> $sum]);
    }

    public function form() {
        return view('form1');
    }
}
