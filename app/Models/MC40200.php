<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @OA\Schema(
 *     title="MC40200",
 *     description="Tabla para divisas",
 *     @OA\Xml(
 *         name="MC40200"
 *     )
 * )
 */
class MC40200 extends Model
{
    //
    protected $table = 'MC40200';

    protected $primaryKey = 'DEX_ROW_ID';

    /**
     * @OA\Property(
     *      title="CURNCYID",
     *      description="Id de moneda",
     *      example="This is new project's description",
     *      format="int64",
     *      example=100
     * )
     *
     * @var integer
     */
    public $CURNCYID;


     /**
     * @OA\Property(
     *      title="CURRNIDX",
     *      description="Indice de moneda",
     *      example="This is new project's description",
     *      format="int64",
     *      example=200
     * )
     *
     * @var integer
     */

    public $CURRNIDX;


    
}
