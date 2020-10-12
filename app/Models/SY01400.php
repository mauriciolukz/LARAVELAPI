<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class SY01400 extends Model

/**
 * @OA\Schema(
 *     title="SY01400",
 *     description="Tabla para usuarios",
 *     @OA\Xml(
 *         name="SY01400"
 *     )
 * )
 */
class SY01400 extends Authenticatable implements JWTSubject
{
    //Users 

    //protected $connection = 'DYNAMICS';

    protected $table = 'SY01400';

    protected $primaryKey = 'DEX_ROW_ID';

    /**
     * @OA\Property(
     *      title="CURNCYID",
     *      description="Id de moneda",
     *      example="This is new project's description",
     *      format="string",
     *      example=100
     * )
     *
     * @var string
     */
    public $email;


     /**
     * @OA\Property(
     *      title="CURRNIDX",
     *      description="Indice de moneda",
     *      example="This is new project's description",
     *      format="string",
     *      example=200
     * )
     *
     * @var string
     */

    public $password;

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function getAuthPassword()
    {
        return $this->USERNAME;
    }

}

