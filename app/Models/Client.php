<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Client
 * @package App\Models
 * @version January 25, 2020, 6:21 pm UTC
 *
 * @property \App\Models\VILLE cpdi
 * @property \Illuminate\Database\Eloquent\Collection cONTRATS
 * @property string NOMCLI
 * @property string PRENOMCLI
 * @property string ADRCLI
 * @property integer NUMPERMIS
 * @property string TELCLI
 * @property integer CPDI
 */
class Client extends Model
{

    public $table = 'CLIENT';
    
    public $timestamps = false;




    public $fillable = [
        'NOMCLI',
        'PRENOMCLI',
        'ADRCLI',
        'NUMPERMIS',
        'TELCLI',
        'CPDI'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'NUMCLI' => 'integer',
        'NOMCLI' => 'string',
        'PRENOMCLI' => 'string',
        'ADRCLI' => 'string',
        'NUMPERMIS' => 'integer',
        'TELCLI' => 'string',
        'CPDI' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NOMCLI' => 'required',
        'PRENOMCLI' => 'required',
        'ADRCLI' => 'required',
        'NUMPERMIS' => 'required',
        'TELCLI' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     **/
    public function cpdi()
    {
        return $this->belongsTo(\App\Models\VILLE::class, 'CPDI');
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cONTRATS()
    {
        return $this->hasMany(\App\Models\CONTRAT::class, 'NUMCLI');
    }
}
