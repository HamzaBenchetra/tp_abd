<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Model
 * @package App\Models
 * @version January 25, 2020, 6:20 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection vEHICULES
 * @property string MARQUE
 */
class Modele extends Model
{

    public $table = 'MODELE';

    public $timestamps = false;




    public $fillable = [
        'MARQUE'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'NUMMOD' => 'integer',
        'MARQUE' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'MARQUE' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vEHICULES()
    {
        return $this->hasMany(\App\Models\VEHICULE::class, 'NUMMOD');
    }
}
