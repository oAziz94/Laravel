<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    Protected $guarded = ['id'];

    public function categories()
    {
    	return $this->belongsToMany('App\Category')->withTimestamps();
    }

    public function comments()
    {
    	return $this->morphMany('App\Comment', 'post');
    }
}
