<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class match extends Model
{
    //

    protected $table = 'matchs';
 	protected $fillable = ['contender1','contender2','match_status'];


 	public function admin(){

       return $this->belongsTo('App\Admin','admin_id');

 	}

}
