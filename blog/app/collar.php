<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class collar extends Model
{
	protected $table = 'collars';
	
    public function front()
   {
   	
    return $this->belongsTo(front::class);
   }
}
