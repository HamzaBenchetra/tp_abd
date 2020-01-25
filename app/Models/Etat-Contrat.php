<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Etat-Contrat
 * @package App\Models
 * @version January 25, 2020, 6:20 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection cONTRATS
 * @property string LIBETATCONT
 */
class Etat-Contrat extends Model
{

    public $table = 'ETAT-CONTRAT';
    
    public $timestamps = false;




    public $fillable = [
        'LIBETATCONT'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ETATCONT' => 'integer',
        'LIBETATCONT' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'LIBETATCONT' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cONTRATS()
    {
        return $this->hasMany(\App\Models\CONTRAT::class, 'ETATCONT');
    }
}
