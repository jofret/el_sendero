<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [ 
		'name',
		'city',
		'telephone',
		'email',
		'birthday',
		'birthmonth',
		'message',
		'status', 
		'sender', 
	];

}
