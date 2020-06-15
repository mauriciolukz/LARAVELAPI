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
    *     summary="Mostrar moneda por id.",
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
        //$MC40200 = \DB::select(\DB::raw("exec DYNAMICS.dbo.zDP_MC40200SS_1 '".$id."'"));
        $MC40200 = MC40200::where('CURNCYID', $id)->first();

        if (!$MC40200) {
            return response()->json(['success'=>false, 'message' => 'Moneda no registrada, por favor verifique.'], 404);
        }

        return response()->json($MC40200, 200);
    }

    /**
    * @OA\Post(
    *     path="/MC40200/addCurrency/{MC40200}",
    *     tags={"API PARA MONEDA"},
    *     summary="Agregar moneda.",
    *     description="Returns project data",
    *     @OA\Response(
    *         response=200,
    *         description="Successful operation",
    *         @OA\JsonContent(ref="#/components/schemas/MC40200")
    *     ),
    *     @OA\RequestBody(
    *         description="Crear moneda",
    *         required=true,
    *         @OA\MediaType(
    *           mediaType="application/json",
    *           @OA\Schema(ref="#/components/schemas/MC40200")
    *         )
    *     )
    * )
    */

    public function addCurrency(Request $request){
        
        $curncyid = $request->curncyidText."$";
        $crncydsc = $request->crncydsc; 
        $crncysym = $request->crncysym; 
        $cysymplc = $request->cysymplc;
        $inclspac = json_decode($request->inclspacStatus) ? 1 : 0;
        $decsymbl = $request->decsymblIndex; 
        $decplcur = $request->decplcurIndex; 
        $thossym = $request->thossymIndex;
        $isocurrc = $request->isocurrc;

        $affected = \DB::insert("BEGIN DECLARE @num int EXEC DYNAMICS.dbo.zDP_MC40200SI '${curncyid}', 1001, 33.00000, '${crncydsc}', '${crncysym}', 0, 1, 1, ${cysymplc}, ${inclspac}, 1, 0, 0, ${decsymbl}, ${decplcur}, ${thossym}, 'Dólares', 'Centavos', 'Y', '${isocurrc}', 0, @num OUT SELECT @num END ");
        //$affected = \DB::insert('insert into users (id, name) values (?, ?)', [1, 'Dayle']);
        
        if ($affected) {
            return response()->json(['success'=>true, 'message' => 'Moneda registrada.'], 201);
        }
    }

    /**
    * @OA\Put(
    *     path="/MC40200/updateCurrency/{MC40200}",
    *     tags={"API PARA MONEDA"},
    *     summary="Modificar moneda.",
    *     description="Returns project data",
    *     @OA\Response(
    *         response=200,
    *         description="Successful operation",
    *         @OA\JsonContent(ref="#/components/schemas/MC40200")
    *     ),
    *     @OA\RequestBody(
    *         description="Modificar moneda",
    *         required=true,
    *         @OA\MediaType(
    *           mediaType="application/json",
    *           @OA\Schema(ref="#/components/schemas/MC40200")
    *         )
    *     )
    * )
    */
    public function updateCurrency(Request $request){

        $curncyid = $request->curncyidText;
        $crncydsc = $request->crncydsc; 
        $crncysym = $request->crncysym; 
        $cysymplc = $request->cysymplc;
        $inclspac = json_decode($request->inclspacStatus) ? 1 : 0;
        $decsymbl = $request->decsymblIndex; 
        $decplcur = $request->decplcurIndex; 
        $thossym = $request->thossymIndex;
        $isocurrc = $request->isocurrc;

        $affected = \DB::table('MC40200')
              ->where('CURNCYID', $curncyid)
              ->update(
                    ['CRNCYDSC', $crncydsc],
                    ['CRNCYSYM', $crncysym],
                    ['CYSYMPLC', $cysymplc],
                    ['INCLSPAC', $inclspac],
                    ['DECSYMBL', $decsymbl],
                    ['DECPLCUR', $decplcur],
                    ['THOSSYM', $thossym],
                    ['ISOCURRC', $isocurrc]
                );

        return response()->json(['success'=>true, 'message' => $affected], 201);
    }
}