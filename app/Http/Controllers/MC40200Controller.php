<?php

namespace App\Http\Controllers;

use App\MC40200;
use Illuminate\Http\Request;

class MC40200Controller extends Controller
{
    /**
    * @OA\Get(
    *     path="/MC40200/getCurrencyById/{id}",
    *     tags={"API PARA MONEDA"},
    *     summary="Mostrar la moneda buscada por id.",
    *       description="Returns project data",
    *       @OA\Parameter(
    *          name="id",
    *          description="Divisa Id",
    *          required=true,
    *          in="path",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *     @OA\Response(
    *         response=200,
    *         description="Successful operation",
    *         @OA\JsonContent(ref="#/components/schemas/MC40200")
    *     ),
    *     @OA\Response(
    *         response="default",
    *         description="Ha ocurrido un error."
    *     ),
    *     @OA\Response(
    *          response=401,
    *          description="Unauthenticated",
    *      ),
    * )
    */

    public function getCurrencyById(Request $request,$id){
        $MC40200 = \DB::select(\DB::raw("exec DYNAMICS.dbo.zDP_MC40200SS_1 '".$id."'"));
        //$MC40200 = MC40200::where('CURNCYID', $id)->first();

        if (!$MC40200) {
            return response()->json(['success'=>false, 'message' => 'Moneda no registrada, por favor verifique.'], 401);
        }

        return response()->json($MC40200, 200);
    }
}