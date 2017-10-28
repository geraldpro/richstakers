<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class admin extends Model
{
    //
    protected $table = 'admins';
 	  protected $fillable = ['email','password'];

    public function match(){

    return $this->hasMany('App\Match','match_id');

   }


}
