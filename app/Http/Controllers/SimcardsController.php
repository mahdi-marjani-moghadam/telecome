<?php

namespace App\Http\Controllers;

use App\Http\Controllers\NewsController;
use App\Models\News;
use Illuminate\Http\Request;

class SimcardsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::limit(2)->get();

        return view('simcardsIndex',compact('news'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Simcards  $simcards
     * @return \Illuminate\Http\Response
     */
    public function show(Simcards $simcards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Simcards  $simcards
     * @return \Illuminate\Http\Response
     */
    public function edit(Simcards $simcards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Simcards  $simcards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Simcards $simcards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Simcards  $simcards
     * @return \Illuminate\Http\Response
     */
    public function destroy(Simcards $simcards)
    {
        //
    }
}
