<?php

namespace App\Http\Controllers; 

use JWTAuth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\LoginRequest;

class SY01400Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    /**
    * @OA\Post(
    *     path="/SY01400/login",
    *     tags={"Registro Usuario"},
    *     summary="",
    *       description="Returns project data",
    *       @OA\Parameter(
    *          name="email",
    *          description="email",
    *          required=true,
    *          in="path",
    *          @OA\Schema(
    *              type="string"
    *          )
    *      ),
    *       @OA\Parameter(
    *          name="password",
    *          description="password",
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
    public function login(LoginRequest $request)
    {
        
        $request->validated();
    
        $creds = $request->only('email', 'password');
        
        if (!$token = auth()->attempt(['USERID' => $request->email, 'password' => $request->password])) {
            return response()->json(['success'=>false, 'message' => 'Usuario no registrado, por favor verifique.'], 404);
        }

        return response()->json([
            'success' => true,
            'SY01400' => auth()->user(),
            'token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth()->factory()->getTTL() * 60
        ], 200);

    }

    public function me()
    {
        return response()->json(auth()->user());
    }

    /**
    * @OA\Post(
    *     path="/SY01400/menu",
    *     tags={"Menu"},
    *     summary="Mostrar menu lateral.",
    *       description="Returns project data",
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
    public function menu_side(){
        $array = array("menu_side"=>
            array(
                    array(
                    "item_id"=>1,
                    "item_icon"=>"<Home />",
                    "item_name"=>"Inicio",
                    "sub_items"=>
                        array(
                            array(
                            "sub_item_id" => 1,
                            "item_icon" => "<Home />",
                            "item_name" => "Sub"
                            ),
                            array(
                            "sub_item_id" => 2,
                            "item_icon" => "<Home />",
                            "item_name" => "Sub"
                            )
                        )
                    ),
                    array(
                        "item_id"=>2,
                        "item_icon"=>"<Money />",
                        "item_name"=>"Ventas",
                        "sub_items"=>
                            array(
                                array(
                                "sub_item_id" => 1,
                                "item_icon" => "<Home />",
                                "item_name" => "Sub"
                                ),
                                array(
                                "sub_item_id" => 2,
                                "item_icon" => "<Home />",
                                "item_name" => "Sub"
                                )
                            )
                    ),
                    array(
                        "item_id"=>3,
                        "item_icon"=>"<ShoppingCart />",
                        "item_name"=>"Compras",
                        "sub_items"=>
                            array(
                                array(
                                "sub_item_id" => 1,
                                "item_icon" => "<Home />",
                                "item_name" => "Sub"
                                ),
                                array(
                                "sub_item_id" => 2,
                                "item_icon" => "<Home />",
                                "item_name" => "Sub"
                                )
                            )
                    ),
                    array(
                        "item_id"=>4,
                        "item_icon"=>"<AllInbox />",
                        "item_name"=>"Inventario",
                        "sub_items"=>
                            array(
                                array(
                                "sub_item_id" => 1,
                                "item_icon" => "<Home />",
                                "item_name" => "Sub"
                                ),
                                array(
                                "sub_item_id" => 2,
                                "item_icon" => "<Home />",
                                "item_name" => "Sub"
                                )
                            )
                    ),
                    array(
                        "item_id"=>5,
                        "item_icon"=>"<SettingsApplications />",
                        "item_name"=>"Administración",
                        "sub_items"=>
                            array(
                                array(
                                "sub_item_id" => 1,
                                "item_icon" => "<Home />",
                                "item_name" => "Sub"
                                ),
                                array(
                                "sub_item_id" => 2,
                                "item_icon" => "<Home />",
                                "item_name" => "Sub"
                                )
                            )
                    )
                )
        ); 
        return response()->json($array);
    }

     /**
    * @OA\Post(
    *     path="/SY01400/cards",
    *     tags={"Menu"},
    *     summary="Mostrar menu fichas.",
    *       description="Returns project data",
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
    public function cards(Request $request){
        $array = null;
        $id_card = $request->id_card;
        
        switch ($id_card) {
            case '4':
                $array = array("cards"=>
                    array(
                        array(
                        "card_id"=>$id_card,
                        "card_icon"=>"<FolderOpen />",
                        "card_name"=>"Tarjetas",
                        "card_items"=>
                            array(
                                array(
                                    "sub_item_id" => 1,
                                    "item_icon" => "<Home />",
                                    "item_name" => "Articulo"
                                ),
                                array(
                                    "sub_item_id" => 2,
                                    "item_icon" => "<Home />",
                                    "item_name" => "Sitio"
                                ),
                                    array(
                                    "sub_item_id" => 3,
                                    "item_icon" => "<Home />",
                                    "item_name" => "Proveedores"
                                ),
                                array(
                                    "sub_item_id" => 4,
                                    "item_icon" => "<Home />",
                                    "item_name" => "Moneda de articulo"
                                )
                            )
                        )
                    )
            );
            break;
            case '5':
                $array = array("cards"=> //1
                    array( //2
                        //////
                        array(
                            "card_id"=>1,
                            "card_icon"=>"<Settings />",
                            "card_name"=>"Configuración",
                            "card_items"=>
                            array(
                                array(
                                    "sub_item_id" => 1,
                                    "item_icon" => "<Home />",
                                    "item_name" => "Moneda",
                                    "component_name" => "<Currency/>",
                                    "component_title" => "Configuracion de moneda"
                                ),
                                array(
                                    "sub_item_id" => 2,
                                    "item_icon" => "<Home />",
                                    "item_name" => "Acceso Multimoneda",
                                    "component_name" => "<Multicurrencyaccess/>",
                                    "component_title" => "Configuracion de acceso multimoneda"
                                )
                            )
                        ),
                        ///////
                        array(
                            "card_id"=>2,
                            "card_icon"=>"<Settings />",
                            "card_name"=>"Configuraciónn",
                            "card_items"=>
                            array(
                                array(
                                    "sub_item_id" => 1,
                                    "item_icon" => "<Home />",
                                    "item_name" => "Monedaa",
                                    "component_name" => "Currencyy",
                                    "component_title" => "Configuracion de monedaa"
                                ),
                                array(
                                    "sub_item_id" => 2,
                                    "item_icon" => "<Home />",
                                    "item_name" => "Pruebaa",
                                    "component_name" => "Pruebaa",
                                    "component_title" => "Configuracion de pruebaa"
                                )
                            )
                        )

                    )//2
                );//1
            break;
        }
        return response()->json($array);
    }

}


