<?php

namespace App\Http\Controllers;

use App\Models\simcards;
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
        return 'hallo mahdi';
//            view('simkarte');
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
     * @param  \App\Models\simcards  $simcards
     * @return \Illuminate\Http\Response
     */
    public function show(simcards $simcards)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\simcards  $simcards
     * @return \Illuminate\Http\Response
     */
    public function edit(simcards $simcards)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\simcards  $simcards
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, simcards $simcards)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\simcards  $simcards
     * @return \Illuminate\Http\Response
     */
    public function destroy(simcards $simcards)
    {
        //
    }
}
