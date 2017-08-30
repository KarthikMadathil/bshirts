<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class button extends Model
{


    protected $table = 'buttons';
    public $timestamps = true;
	public function front()
   {
   	
    return $this->belongsTo(front::class);
   }
}
    //

