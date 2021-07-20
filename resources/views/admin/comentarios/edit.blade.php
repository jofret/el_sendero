@extends('layouts.comentarios')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					<strong>Comentario</strong>
 				</div>
 				<div class="card-body">
				    {!! Form::model($comentario,['route' => ['comments.update', $comentario->id],
				    'method' => 'PUT', 'files' => true]) !!}
				    	@include('admin.comentarios.partials.form')
				    {!! Form::close() !!}
 				</div>
 			</div>
 		</div>
    </div>
</div>
 @endsection