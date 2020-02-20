<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function commentable()
    {
    	//Morph es polimorfismo
    	return $this->morphTo();
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
