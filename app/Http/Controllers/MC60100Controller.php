<?php

namespace App\Http\Controllers;

use App\Models\MC60100;
use Illuminate\Http\Request;

class MC60100Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        echo 'Holaa';
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
     * @param  \App\MC60100  $mC60100
     * @return \Illuminate\Http\Response
     */
    public function show(MC60100 $mC60100,Request $request)
    {
        $MC60100 = \DB::select('CALL zDP_MC60100SS_1 (?,?);',array($request->CMPANYID,$request->CURNCYID));
        return response()->json($MC60100, 200);
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\MC60100  $mC60100
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, MC60100 $mC60100)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\MC60100  $mC60100
     * @return \Illuminate\Http\Response
     */
    public function destroy(MC60100 $mC60100)
    {
        //
    }
}
