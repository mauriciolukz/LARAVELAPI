<?php

namespace App\Http\Controllers;

use App\Models\MC40200;
use Illuminate\Http\Request;

class MC40200Controller extends Controller
{
    /**
    * @OA\Get(
    *     security={{"bearerAuth":{}}},
    *     path="/MC40200/getCurrencyById/{id}",
    *     tags={"MONEDA"},
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
            return response()->json(['success'=>false, 'message' => 'Moneda no registrada, por favor verifique.'], 200);
        }
        return response()->json($MC40200, 200);
    }

    /**
    * @OA\Post(
    *     security={{"bearerAuth":{}}},
    *     path="/MC40200/addCurrency/{MC40200}",
    *     tags={"MONEDA"},
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
        
        $curncyid = $request->curncyidText;
        $crncydsc = $request->crncydsc; 
        $crncysym = $request->crncysym; 
        $cysymplc = $request->cysymplc;
        $inclspac = json_decode($request->inclspacStatus) ? 1 : 0;
        $decsymbl = $request->decsymblIndex; 
        $decplcur = $request->decplcurIndex;
        $thoussym = $request->thoussymIndex;
        $isocurrc = $request->isocurrc;
        $noteindx = $request->noteindx;

        $maxValue = (MC40200::max('CURRNIDX') == null) ? 1000 : MC40200::max('CURRNIDX') + 1;
        if (env('DB_TYPE') == 'MYSQL') {
            $affected = \DB::insert('CALL zDP_MC40200SI (?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)',array($curncyid,$maxValue, $noteindx, $crncydsc, $crncysym, 0, 1, 1, $cysymplc, $inclspac, 1, 0, 0, $decsymbl, $decplcur, $thoussym, 'Dólares', 'Centavos', 'Y', $isocurrc,0,'@outparam'));
        }else{
            $affected = \DB::insert("BEGIN DECLARE @num int EXEC DYNAMICS.dbo.zDP_MC40200SI '${curncyid}', ${maxValue}, ${noteindx}, '${crncydsc}', '${crncysym}', 0, 1, 1, ${cysymplc}, ${inclspac}, 1, 0, 0, ${decsymbl}, ${decplcur}, ${thoussym}, 'Dólares', 'Centavos', 'Y', '${isocurrc}', 0, @num OUT SELECT @num END ");
        }
        
        if ($affected) {
            return response()->json(['success'=>true, 'message' => 'Moneda registrada.'], 201);
        }

    }

    /**
    * @OA\Put(
    *     security={{"bearerAuth":{}}},
    *     path="/MC40200/updateCurrency/{MC40200}",
    *     tags={"MONEDA"},
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
    public function updateCurrency(Request $request,$id){
        
        $curncyid = $request->curncyidText;
        $crncydsc = $request->crncydsc; 
        $crncysym = $request->crncysym; 
        $cysymplc = $request->cysymplc;
        $inclspac = json_decode($request->inclspacStatus) ? 1 : 0;
        $decsymbl = $request->decsymblIndex; 
        $decplcur = $request->decplcurIndex; 
        $thoussym  = $request->thoussymIndex;
        $isocurrc = $request->isocurrc;
        
        $affected = \DB::table('MC40200')
              ->where('CURNCYID', $curncyid)
              ->update(array(
                    'CRNCYDSC'=> $crncydsc,
                    'CRNCYSYM'=> $crncysym,
                    'CYSYMPLC'=> $cysymplc,
                    'INCLSPAC'=> $inclspac,
                    'DECSYMBL'=> $decsymbl,
                    'DECPLCUR'=> $decplcur,
                    'THOUSSYM'=> $thoussym,
                    'ISOCURRC'=> $isocurrc
                    )
                );

        if ($affected) {
            return response()->json(['success'=>true, 'message' => 'Cambio de moneda registrada.'], 201);
        }
        
    }

    /**
    * @OA\Delete(
    *     security={{"bearerAuth":{}}},
    *     path="/MC40200/deleteCurrency/{id}",
    *     tags={"MONEDA"},
    *     summary="Eliminar moneda.",
    *     description="Returns project data",
    *     @OA\Response(
    *         response=200,
    *         description="Successful operation",
    *         @OA\JsonContent(ref="#/components/schemas/MC40200")
    *     ),
    *       @OA\Parameter(
    *          name="id",
    *          description="Divisa Id",
    *          required=true,
    *          in="path",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    * )
    */
    public function deleteCurrency($id){
        
        //$affectedRows = MC40200::where('CURNCYID', '=', $id)->delete();
        $affectedRows = MC40200::where('CURNCYID', $id)->delete();
        //return response()->json(['success'=>true, 'message' => 'Moneda eliminada.'], 202);
        if ($affectedRows) {
            return response()->json(['success'=>true, 'message' => 'Moneda eliminada.'], 202);
        }
        
    }


    /**
    * @OA\Get(
    *     security={{"bearerAuth":{}}},
    *     path="/MC40200/getCurrencyAllByLimit/{init}/{limit}",
    *     tags={"MONEDA"},
    *     summary="Mostrar moneda por id y rango.",
    *       description="Returns project data",
    *       @OA\Parameter(
    *          name="init",
    *          description="Inicio",
    *          required=true,
    *          in="path",
    *          @OA\Schema(
    *              type="integer"
    *          )
    *      ),
    *       @OA\Parameter(
    *          name="limit",
    *          description="Fin",
    *          required=true,
    *          in="path",
    *          @OA\Schema(
    *              type="integer"
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

    public function getCurrencyAllByLimit($init,$limit){

        $MC40200 = MC40200::skip($init)->take($limit)->get();

        if (!$MC40200) { 
            return response()->json(['success'=>false, 'message' => 'Moneda no registrada, por favor verifique.'], 404);
        }
        return response()->json($MC40200, 200);
    }

}