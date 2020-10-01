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
        $SY01500 = new SY01500();

        $data = \DB::select('CALL zDP_MC60100SS_1 (?,?);',array($request->CMPANYID,$request->CURNCYID));
        $data['SY01500'][] = array('CMPNYNAM' => (new SY01500Controller)->show($SY01500,$request)->original->CMPNYNAM);
        //$data[] = array('CMPNYNAM' => (new SY01500Controller)->show($SY01500,$request)->original->CMPNYNAM);
        
        return response()->json($data, 200);
        
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
