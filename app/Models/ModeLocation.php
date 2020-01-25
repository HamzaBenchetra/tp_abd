<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class ModeLocation
 * @package App\Models
 * @version January 25, 2020, 6:20 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection cONTRATS
 * @property string DESCMODELOC
 */
class ModeLocation extends Model
{

    public $table = 'MODELOCATION';
    
    public $timestamps = false;




    public $fillable = [
        'DESCMODELOC'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'MODELOC' => 'integer',
        'DESCMODELOC' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'DESCMODELOC' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cONTRATS()
    {
        return $this->hasMany(\App\Models\CONTRAT::class, 'MODELOC');
    }
}
