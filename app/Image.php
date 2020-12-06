<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
			'file',
			'precategory_id',
			'category_id', 
			'name',
			'slug'];



	public function user()
	{
		return $this->belongsTo(User::class);
	}

	public function precategory() 
	{
		return $this->belongsTo(Precategory::class);
	}

	public function category() 
	{
		return $this->belongsTo(Category::class);
	}

    //un post pertenece y tiene a muchas etiquetas
}