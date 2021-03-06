<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    /**
     * @OA\Info(
     *      version="1.0.0",
     *      title="Laravel API for ERPHeydude",
     *      description="L5 Swagger OpenApi description",
     *      @OA\Contact(
     *          email="mauriciopalacio1990@gmail.com"
     *      ),
     *      @OA\License(
     *          name="Apache 2.0",
     *          url="http://www.apache.org/licenses/LICENSE-2.0.html"
     *      )
     * )
     *
     * @OA\Server(
     *      url=L5_SWAGGER_CONST_HOST,
     *      description="API Server"
     * )

     *
     * @OA\Tag(
     *     name="API LARAVEL",
     *     description="API Endpoints of Projects"
     * )
     * 
     * @OA\SecurityScheme(
     *    securityScheme="bearerAuth",
     *    in="header",
     *    type="http",
     *    scheme="bearer"
     *  )
     */
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /*
    public function __construct(){
        auth()->setDefaultDriver('api');
    }*/

}
