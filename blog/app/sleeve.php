<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sleeve extends Model
{		
	protected $table = 'sleeves';

   public function front()
   {
   	
    return $this->belongsTo(front::class);
   }
   
}
