<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Vehicule
 * @package App\Models
 * @version January 25, 2020, 6:21 pm UTC
 *
 * @property \App\Models\Modele nummod
 * @property \App\Models\AGENCE numag
 * @property \App\Models\TYPE numtype
 * @property \App\Models\CATEGORIE numcat
 * @property \Illuminate\Database\Eloquent\Collection cONTRATS
 * @property string COULEUR
 * @property integer AGE
 * @property integer NUMMOD
 * @property integer NUMAG
 * @property integer NUMTYPE
 * @property integer NUMCAT
 */
class Vehicule extends Model
{

    public $table = 'VEHICULE';

    public $timestamps = false;




    public $fillable = [
        'COULEUR',
        'AGE',
        'NUMMOD',
        'NUMAG',
        'NUMTYPE',
        'NUMCAT'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'IMMATRICULATION' => 'integer',
        'COULEUR' => 'string',
        'AGE' => 'integer',
        'NUMMOD' => 'integer',
        'NUMAG' => 'integer',
        'NUMTYPE' => 'integer',
        'NUMCAT' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'COULEUR' => 'required',
        'AGE' => 'required',
        'NUMMOD' => 'required',
        'NUMAG' => 'required',
        'NUMTYPE' => 'required',
        'NUMCAT' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function nummod()
    {
        return $this->belongsTo(\App\Models\Modele::class, 'NUMMOD');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function numag()
    {
        return $this->belongsTo(\App\Models\AGENCE::class, 'NUMAG');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function numtype()
    {
        return $this->belongsTo(\App\Models\TYPE::class, 'NUMTYPE');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function numcat()
    {
        return $this->belongsTo(\App\Models\CATEGORIE::class, 'NUMCAT');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cONTRATS()
    {
        return $this->hasMany(\App\Models\CONTRAT::class, 'IMMAT');
    }
}
