<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Model;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Foundation\Auth\User as Authenticatable;

//class SY01400 extends Model
class SY01400 extends Authenticatable implements JWTSubject
{
    //Users

    //protected $connection = 'DYNAMICS';

    protected $table = 'sy01400';

    protected $primaryKey = 'DEX_ROW_ID';

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

