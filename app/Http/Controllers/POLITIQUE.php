<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POLITIQUE extends Controller
{
    public function index()
    {
        return view('frontend.confidentialité');
    }
}
