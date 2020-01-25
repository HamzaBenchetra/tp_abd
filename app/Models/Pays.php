<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Pays
 * @package App\Models
 * @version January 25, 2020, 6:20 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection aGENCES
 * @property string NOMPAYS
 * @property integer NBHANITANTS
 */
class Pays extends Model
{

    public $table = 'PAYS';

    public $timestamps = false;
    public $primaryKey = 'NUMPAYS';
    public $incrementing = false;



    public $fillable = [
        'NOMPAYS',
        'NBHANITANTS'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'NUMPAYS' => 'integer',
        'NOMPAYS' => 'string',
        'NBHANITANTS' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NOMPAYS' => 'required',
        'NBHANITANTS' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function aGENCES()
    {
        return $this->hasMany(\App\Models\AGENCE::class, 'NUMPAYS');
    }
}
