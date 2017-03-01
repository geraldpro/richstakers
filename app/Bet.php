<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class bet extends Model
{
   
    protected $table = 'bet';
 	protected $fillable = ['contender1','contender2','prediction','stake'];


 	public function user(){

    return $this->belongsToMany('App\User','user_id');

 	}

}
