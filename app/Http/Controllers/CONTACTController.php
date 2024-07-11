<?php

namespace App\Http\Controllers;

use App\Models\CONTACT;
use Illuminate\Http\Request;

class CONTACTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.contact');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(CONTACT $cONTACT)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CONTACT $cONTACT)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CONTACT $cONTACT)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CONTACT $cONTACT)
    {
        //
    }
}
