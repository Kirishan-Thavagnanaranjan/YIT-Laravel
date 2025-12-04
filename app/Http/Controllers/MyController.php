<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('my.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       return view('my.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return "This is store page";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return view('my.show');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view('my.edit');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "This is update page";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return "This is delete";
    }
}
