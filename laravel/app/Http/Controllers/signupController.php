<?php

namespace App\Http\Controllers;

// use Illuminate\Http\Request;
use App\Http\Requests;
use Input, File;
use Request;
use Illuminate\Support\Facades\Session;
use App\Http\Requests\signupRequest;

class signupController extends Controller
{
    public function index() {
        return view('signup');
    }
    public function displayInfor (signupRequest $Request){ 
        $userSession = session('userSession', []);
        $user = [
            'name' => $name = $Request -> input("name"),
            'age' => $age = $Request -> input("age"),
            'date' => $date = $Request -> input("date"),
            'phone' => $phone = $Request -> input("phone"),
            'web' => $web = $Request -> input("phone"),
            'address' => $address = $Request -> input("address")

        ];
        $userSession[] = $user;

        session(['userSession' => $userSession]);
        return view('signup') -> with ('userSession', $userSession);
    }
    public function clear() {
        Session::forget('userSession');
        return redirect(to:'/');
    }
}

