<?php

namespace App\Http\Controllers;

use App\MC40200;
use Illuminate\Http\Request;


/**
* @OA\Info(title="API Moneda", version="1.0")
*
* @OA\Server(url="http://localhost:8000")
*/
class MC40200Controller extends Controller
{
    /**
    * @OA\Get(
    *     path="/api/MC40200/getCurrencyById/",
    *     summary="Mostrar la moneda buscada.",
    *     @OA\Parameter(
    *         name="id",
    *         in="query",
    *         type="string",
    *         description="Your divisa",
    *         required=true,
    *     ),
    *     @OA\Response(
    *         response=200,
    *         description="Mostrar la moneda."
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     )
    * )
    */

    /**
     * Combine firstname and lastname
     *
     * @param $id
     * 
     */
    public function getCurrencyById(Request $request,$id){
        //$MC40200 = \DB::select(\DB::raw("exec DYNAMICS.dbo.zDP_MC40200SS_1 '".$id."'"));
        $MC40200 = MC40200::where('CURNCYID', $id)->first();
        return response()->json($MC40200, 200);
    }
}