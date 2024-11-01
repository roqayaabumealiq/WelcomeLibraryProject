<?php

namespace App\Http\Controllers\WelcomeLibrary;

use App\Http\Controllers\Controller;

class WelcomeController extends Controller
{
    public function index()
    {
        return view('welcome'); 
    }
}

