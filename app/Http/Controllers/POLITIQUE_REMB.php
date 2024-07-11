<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class POLITIQUE_REMB extends Controller
{
    public function index()
    {
        return view('frontend.Remboursement');
    }
}
