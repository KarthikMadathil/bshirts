<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pocket extends Model
{
	

    protected $table = 'pockets';
    public $timestamps = true;
   	
    public function front()
   {
    return $this->belongsTo(front::class);
   }
   
}
