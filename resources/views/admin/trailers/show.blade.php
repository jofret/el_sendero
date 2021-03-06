@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Ver Artículo para Trailer
 				</div>
 				<div class="card-body">
				    <p><strong>Nombre: </strong> {{ $trailer->name }}</p>
				    <p><strong>Slug: </strong> {{ $trailer->slug }}</p>
				    <p><strong>Contenido: </strong> {{ $trailer->body }}</p>
 				</div>
 			</div>
 		</div>
    </div>
</div>
 @endsection