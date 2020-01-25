<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Type
 * @package App\Models
 * @version January 25, 2020, 6:21 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection vEHICULES
 * @property string LIBTYPE
 */
class Type extends Model
{

    public $table = 'TYPE';
    
    public $timestamps = false;




    public $fillable = [
        'LIBTYPE'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'NUMTYPE' => 'integer',
        'LIBTYPE' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'LIBTYPE' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vEHICULES()
    {
        return $this->hasMany(\App\Models\VEHICULE::class, 'NUMTYPE');
    }
}
