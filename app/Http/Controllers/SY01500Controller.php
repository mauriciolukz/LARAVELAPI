<?php

namespace App\Http\Controllers;

use App\Models\SY01500;
use Illuminate\Http\Request;

class SY01500Controller extends Controller
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
     * @param  \App\SY01500  $sY01500
     * @return \Illuminate\Http\Response
     */
    public function show(SY01500 $sY01500,Request $request)
    {
        $SY01500 = SY01500::where('CMPANYID', $request->CMPANYID)->first();
        return response()->json($SY01500, 200);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\SY01500  $sY01500
     * @return \Illuminate\Http\Response
     */
    public function edit(SY01500 $sY01500)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\SY01500  $sY01500
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SY01500 $sY01500)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\SY01500  $sY01500
     * @return \Illuminate\Http\Response
     */
    public function destroy(SY01500 $sY01500)
    {
        //
    }
}
