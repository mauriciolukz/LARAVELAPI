<?php

namespace App\Http\Controllers;

use App\Models\MC60100;
use App\Models\SY01500;
use Illuminate\Http\Request;
use App\Http\Controllers\SY01500Controller;

class MC60100Controller extends Controller
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
        // Acceso de la moneda
        $MC60100 = \DB::select('CALL zDP_MC60100SS_1 (?,?);',array($request->CMPANYID,$request->CURNCYID));
        // Informacion de compañia
        $SY01500 = (new SY01500Controller)->show(new SY01500(),$request)->original;
       
        $result = array(
            "CMPNYNAM"      => $SY01500->CMPNYNAM,
            "CMPANYID"      => $SY01500->CMPANYID,
            "CURNCYID"      => $request->CURNCYID,
            "ACCESS"        => sizeof($MC60100),
            "INACTIVE"      => $MC60100[0]->INACTIVE,
            "DEX_ROW_ID"    => $MC60100[0]->DEX_ROW_ID
        );
        return response()->json($result, 200); 
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
