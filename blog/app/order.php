<?php

namespace App;
use orders;

use Illuminate\Database\Eloquent\Model;

class order extends Model
{

    protected $table = 'orders';
    public $timestamps = true;
    
}
