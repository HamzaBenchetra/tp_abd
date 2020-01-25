<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Contrat
 * @package App\Models
 * @version January 25, 2020, 6:20 pm UTC
 *
 * @property \App\Models\ETATCONTRAT etatcont
 * @property \App\Models\CLIENT numcli
 * @property \App\Models\VEHICULE immat
 * @property \App\Models\MODELOCATION modeloc
 * @property string DATECONT
 * @property integer CAUTION
 * @property integer KMDEP
 * @property integer KMRET
 * @property integer ETATCONT
 * @property integer NUMCLI
 * @property integer IMMAT
 * @property integer MODELOC
 */
class Contrat extends Model
{

    public $table = 'CONTRAT';
    
    public $timestamps = false;




    public $fillable = [
        'DATECONT',
        'CAUTION',
        'KMDEP',
        'KMRET',
        'ETATCONT',
        'NUMCLI',
        'IMMAT',
        'MODELOC'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'NUMCONTR' => 'integer',
        'DATECONT' => 'date',
        'CAUTION' => 'integer',
        'KMDEP' => 'integer',
        'KMRET' => 'integer',
        'ETATCONT' => 'integer',
        'NUMCLI' => 'integer',
        'IMMAT' => 'integer',
        'MODELOC' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'DATECONT' => 'required',
        'CAUTION' => 'required',
        'KMDEP' => 'required',
        'KMRET' => 'required',
        'ETATCONT' => 'required',
        'NUMCLI' => 'required',
        'IMMAT' => 'required',
        'MODELOC' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function etatcont()
    {
        return $this->belongsTo(\App\Models\ETATCONTRAT::class, 'ETATCONT');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function numcli()
    {
        return $this->belongsTo(\App\Models\CLIENT::class, 'NUMCLI');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function immat()
    {
        return $this->belongsTo(\App\Models\VEHICULE::class, 'IMMAT');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function modeloc()
    {
        return $this->belongsTo(\App\Models\MODELOCATION::class, 'MODELOC');
    }
}
