<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Precategory extends Model
{
	protected $fillable = [
		   'name','slug'
	];

	public function categories()
    {
    	return $this->hasMany(Category::class);
    }
	

    public function posts()
    {
    	return $this->hasMany(Post::class);
    }
}
