@extends('layouts.app')

 @section('content')
 <div class="container">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<div class="card-header">
 					Lista de Etiquetas
 					<a href="{{ route('tags.create') }}" class="btn btn-primary btn-sm float-right">
 						Crear
 					</a>
 				</div>
 				<div class="card-body">
				    <table class="table table-striped table-hover">
				    	<thead>
				    		<tr>
				    			<th width="10px">ID</th>
				    			<th>Nombre</th>
				    			<th colspan="3">&nbsp;</th>
				    		</tr>
				    	</thead>
				    	<tbody>
				    		@foreach($tags as $tag)
				    		<tr>
				    			<td>{{ $tag->id }}</td>
				    			<td>{{ $tag->name }}</td>
				    			<td width="10px">
				    				<a href="{{ route('tags.show', $tag->id) }}" class="btn btn-outline-secondary btn-sm">
				    					Ver
				    				</a>
				    			</td>
				    			<td width="10px">
				    				<a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-outline-secondary btn-sm">
				    					editar
				    				</a>
				    			</td>
				    			<td width="10px">
				    				{!! Form::open(['route'=>['tags.destroy', $tag->id], 'method' => 'DELETE']) !!}
				    					<button class="btn btn-danger btn-sm">
				    						Eliminar
				    					</button>
				    				{!! Form::close() !!}
				    			</td>
				    		</tr>
				    		@endforeach
				    	</tbody>
				    </table>
			    {{ $tags->render() }}
 				</div>
 			</div>
 		</div>
 	</div>
</div>
 @endsection