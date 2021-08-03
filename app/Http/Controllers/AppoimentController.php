<?php

namespace App\Http\Controllers;

use App\Models\Appoiment;
use Illuminate\Http\Request;

class AppoimentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('appoiment.create');
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
     * @param  \App\Models\Appoiment  $appoiment
     * @return \Illuminate\Http\Response
     */
    public function show(Appoiment $appoiment)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Appoiment  $appoiment
     * @return \Illuminate\Http\Response
     */
    public function edit(Appoiment $appoiment)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Appoiment  $appoiment
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Appoiment $appoiment)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Appoiment  $appoiment
     * @return \Illuminate\Http\Response
     */
    public function destroy(Appoiment $appoiment)
    {
        //
    }
}
