<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class content extends Controller
{
   
    public function index()
    {
        return view('content');
    }
}

