<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class landingpage extends Controller
{
    public function index()
    {
        return view('landingpage');
    }
}
