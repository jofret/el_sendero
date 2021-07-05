<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class TrailerCategory extends Model
{
    //
    protected $fillable = [
			'precategory_id','file','name','slug', 'status','body'];


	public function precategory() 
	{
		return $this->belongsTo(Precategory::class);
	}

	
    public function trailers()
    {
    	return $this->hasMany(Trailer::class);
    }
}
