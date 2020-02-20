<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    public function imageable()
    {
    	//Morph es polimorfismo
    	return $this->morphTo();
    }
}
