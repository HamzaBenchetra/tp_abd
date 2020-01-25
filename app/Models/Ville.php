<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Ville
 * @package App\Models
 * @version January 25, 2020, 6:21 pm UTC
 *
 * @property \Illuminate\Database\Eloquent\Collection cLIENTS
 * @property string VILLECLI
 */
class Ville extends Model
{

    public $table = 'VILLE';
    
    public $timestamps = false;




    public $fillable = [
        'VILLECLI'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'CPDI' => 'integer',
        'VILLECLI' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'VILLECLI' => 'required'
    ];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     **/
    public function cLIENTS()
    {
        return $this->hasMany(\App\Models\CLIENT::class, 'CPDI');
    }
}
