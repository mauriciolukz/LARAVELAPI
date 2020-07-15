<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommonController extends Controller
{
    //
    public function getHola(){   
        return response()->json("mensaje", 200);  
    }
}
