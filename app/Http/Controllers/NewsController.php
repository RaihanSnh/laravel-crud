<?php

namespace App\Http\Controllers;

use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        echo "<h1>Index Method</h1>";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        echo "<h1>Create Method</h1>";
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
    public function show(News $news)
    {
        echo "<h1>Show Method</h1>";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(News $news)
    {
        echo "<h1>Edit Method</h1>";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, News $news)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(News $news)
    {
        //
    }
}
