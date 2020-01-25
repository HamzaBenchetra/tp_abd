<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Tarifs
 * @package App\Models
 * @version January 25, 2020, 6:20 pm UTC
 *
 * @property integer KMFORFAIT
 * @property integer MODELOC
 * @property integer COUTBASE
 */
class Tarifs extends Model
{

    public $table = 'TARIFS';
    
    public $timestamps = false;




    public $fillable = [
        'KMFORFAIT',
        'MODELOC',
        'COUTBASE'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'NUMCAT' => 'integer',
        'KMFORFAIT' => 'integer',
        'MODELOC' => 'integer',
        'COUTBASE' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'KMFORFAIT' => 'required',
        'MODELOC' => 'required',
        'COUTBASE' => 'required'
    ];

    
}
