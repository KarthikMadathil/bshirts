<?php

namespace App;

use App\product;
use Illuminate\Database\Eloquent\Model;

class front extends Model
{
	
	protected $with = ['collar','cuff','sleeve','pocket','planket','button'];

	public function product()
	{
		return $this->belongsTo(product::class);
	}
	public function collar()
	{
		return $this->hasMany(collar::class ,'front_id');
	}

// product has many collar or front has many collar  ??front so define the fornt_id in collar not product_id in collar table make relation betwenn frnt and  collar not product and collar ok 
	public function button()
	{
		return $this->hasMany(button::class,'front_id');
	}


	public function sleeve()
	{
		
		return $this->hasMany(sleeve::class,'front_id');
	}
	public function cuff()
	{
		
		return $this->hasMany(cuff::class,'front_id');
	}
	public function planket()
	{
		
		return $this->hasMany(planket::class,'front_id');
	}
	public function pocket()
	{
		
		return $this->hasMany(pocket::class,'front_id');  //this front id is ?? ok, what happen when pass this id okr yy tht error ! ??
	}
}
//here i have defined relation s and need to feetch all these relations tooo 

/// thanks ...(Y )
// ok 