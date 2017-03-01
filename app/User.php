<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The database table used for the model
     *
     * @var array
     */
    protected $table = 'users';


    /**
    * The properties of this model that can be filled automatically
    */

    protected $fillable = ['first_name', 'last_name', 'email', 'password'];

    /**
     * Model Validation Rules
     */
    protected $rules = [
        'create' => [
            
            'first_name' => 'min:2|required',
            'last_name' => 'min:3',
            'email' => 'unique:users',
            'password' => 'confirmed',

            
        ],
        'update' => [

        ],
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];


    public function bet(){

   return $this->belongsToMany('App\bet','bet_id');
    }
}
