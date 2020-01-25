<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Categorie
 * @package App\Models
 * @version January 25, 2020, 6:20 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection vEHICULES
 * @property string LIBCAT
 */
class Categorie extends Model
{

    public $table = 'CATEGORIE';
    
    public $timestamps = false;




    public $fillable = [
        'LIBCAT'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'NUMCAT' => 'integer',
        'LIBCAT' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'LIBCAT' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vEHICULES()
    {
        return $this->hasMany(\App\Models\VEHICULE::class, 'NUMCAT');
    }
}
