<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class planket extends Model
{

    protected $table = 'plankets';
    //public $timestamps = true;
    
    public function front()
   {
   	
    return $this->belongsTo(front::class);
   }
}
