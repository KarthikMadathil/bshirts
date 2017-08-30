<?php

namespace App;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
	

    protected $table = 'products';
    public $timestamps = true;
// explain it here what do you need ; 
    
    public function front()
   {
   	
    return $this->hasOne(front::class,'product_id');
   }



// is here correct  got it ? yes and befor let me check 




// 
}
