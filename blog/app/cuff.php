<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class cuff extends Model
{
	//we need to define table here !?
	protected $table = 'cuffs';

    public function front()
   {
   	
    return $this->belongsTo(front::class);
   }


}
