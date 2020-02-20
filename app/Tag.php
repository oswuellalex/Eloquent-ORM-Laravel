<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    public function posts()
    {
    	//Morph es polimorfismo
    	return $this->morphByMany(Post::class, 'taggable');
    }

    public function videos()
    {
    	//Morph es polimorfismo
    	return $this->morphByMany(Video::class, 'taggable');
    }
}
