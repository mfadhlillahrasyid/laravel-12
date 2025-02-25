<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingController extends Controller
{
    //
    public function index()
    {
        return view('landing.index');
    }

    public function account()
    {
        return view('landing.account');
    }
}
