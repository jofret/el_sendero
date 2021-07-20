<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comentario extends Model
{
    protected $fillable = [
		   'post_id',
		   'trailer_id',
		   'name',
		   'email',
		   'body',
		   'publicacion',
		   'respuesta',
		   'fecha_respuesta',
		   'status',
		   'link'
	];
}
