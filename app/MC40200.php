<?php

namespace App;

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

    public $CURNCYID;

    /**
     * @OA\Property(
     *      title="CURNCYID",
     *      description="Id de moneda",
     *      example="This is new project's description"
     * )
     *
     * @var integer
     */

    public $CURRNIDX;

    /**
     * @OA\Property(
     *      title="CURRNIDX",
     *      description="indice de moneda",
     *      example="This is new project's description",
     *      format="int64",
     *      example=100
     * )
     *
     * @var integer
     */


     /**
     * @OA\Property(
     *     title="SY01400",
     *     description="Project author's user model"
     * )
     *
     * @var \App\Models\SY01400
     */
    private $SY01400;
    
}
