<?php

namespace App\Models;

use Eloquent as Model;

/**
 * Class Users
 * @package App\Models
 * @version January 25, 2020, 6:21 pm UTC
 *
 * @property string NAME
 * @property string EMAIL
 * @property string|\Carbon\Carbon EMAIL_VERIFIED_AT
 * @property string PASSWORD
 * @property string REMEMBER_TOKEN
 * @property string|\Carbon\Carbon CREATED_AT
 * @property string|\Carbon\Carbon UPDATED_AT
 */
class Users extends Model
{

    public $table = 'USERS';
    
    public $timestamps = false;




    public $fillable = [
        'NAME',
        'EMAIL',
        'EMAIL_VERIFIED_AT',
        'PASSWORD',
        'REMEMBER_TOKEN',
        'CREATED_AT',
        'UPDATED_AT'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'ID' => 'integer',
        'NAME' => 'string',
        'EMAIL' => 'string',
        'EMAIL_VERIFIED_AT' => 'datetime',
        'PASSWORD' => 'string',
        'REMEMBER_TOKEN' => 'string',
        'CREATED_AT' => 'datetime',
        'UPDATED_AT' => 'datetime'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        'NAME' => 'required',
        'EMAIL' => 'required',
        'PASSWORD' => 'required'
    ];

    
}
