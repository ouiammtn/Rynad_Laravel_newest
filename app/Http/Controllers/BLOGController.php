<?php

namespace App\Http\Controllers;

use App\Models\BLOG;
use Illuminate\Http\Request;

class BLOGController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('frontend.blog');
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
    public function show(BLOG $bLOG)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(BLOG $bLOG)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, BLOG $bLOG)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(BLOG $bLOG)
    {
        //
    }
}
