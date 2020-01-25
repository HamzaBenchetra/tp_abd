<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Agence
 * @package App\Models
 * @version January 25, 2020, 6:20 pm UTC
 *
 * @property \App\Models\PAY numpays
 * @property \Illuminate\Database\Eloquent\Collection vEHICULES
 * @property string NOMAG
 * @property integer NBREMPLOYES
 * @property integer NUMPAYS
 */
class Agence extends Model
{

    public $table = 'AGENCE';
    
    public $timestamps = false;




    public $fillable = [
        'NOMAG',
        'NBREMPLOYES',
        'NUMPAYS'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'NUMAG' => 'integer',
        'NOMAG' => 'string',
        'NBREMPLOYES' => 'integer',
        'NUMPAYS' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NOMAG' => 'required',
        'NBREMPLOYES' => 'required',
        'NUMPAYS' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function numpays()
    {
        return $this->belongsTo(\App\Models\PAY::class, 'NUMPAYS');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function vEHICULES()
    {
        return $this->hasMany(\App\Models\VEHICULE::class, 'NUMAG');
    }
}
