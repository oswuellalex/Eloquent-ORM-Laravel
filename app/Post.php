<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
    	//Morph es polimorfismo
    	return $this->morphMany(Comment::class, 'commentable');
    }

    public function image()
    {
    	//Morph es polimorfismo
    	return $this->morphOne(Image::class, 'imageable');
    }

    public function tags()
    {
    	//Morph es polimorfismo
    	return $this->morphToMany(Tag::class, 'taggable');
    }
}
