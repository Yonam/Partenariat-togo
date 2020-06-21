<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static function findBySlug($slug) 
	{
	 return static::where('slug', $slug)->firstOrFail();
	}

	public static function order($posts)
	{
		return static::orderBy('created_at', 'desc')->get();
	}
}
