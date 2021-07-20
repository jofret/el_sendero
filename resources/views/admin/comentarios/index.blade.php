@extends('layouts.comentarios')

 @section('content')
 <div class="">
 	<div class="row justify-content-md-center">
 		<div class="col-lg-10">
 			<div class="card" style="width: 100%">
 				<!-- <div class="card-header">
 					Lista de Artículos
 					<a href="#" class="btn btn-primary btn-sm float-right">
 						Crear
 					</a>
 				</div> -->
 				<div class="card-body">
				    <table class="table table-striped table-hover">
				    	<thead>
				    		<tr>
				    			<th width="10px">ID</th>
				    			<th>Comentario</th>
				    			<th colspan="3">&nbsp;</th>
				    		</tr>

				    	</thead>
				    	<tbody>
				    		@foreach($comentarios as $comentario)

				    		<tr>
				    			<td>{{ $comentario->id }}</td>
				    			<td>
				    				<strong>{{$comentario->name}} escibió:</strong> {!! $comentario->body !!}
				    				<hr>
				    				@if($comentario->respuesta)
				    				 <span style="font-weight: bold;color:red">Respuesta:</span>
				    				 <div style="padding: 10px 20px 10px 50px;">
				    				 	{!! $comentario->respuesta !!}
				    				 </div>
				    				 @else
				    				     <span>No Respondido</span>
				    				 {!! Form::close() !!}
				    				@endif
				    				
				    				
				    			</td>
				    			<td>
				    					@if($comentario->status=='DRAFT')
				    					<span style="color:red">No Publicado</span>
				    					@else
				    						<span style="color:blue">Publicado</span>
				    					@endif

				    			</td>

				    			<td>
				    				
									<a href="{{ route('comments.edit', $comentario->id) }}" type="button" class="btn btn-primary btn-sm">
				    					Editar
				    				 </a>
										    
				    			</td>
				    			<td style="font-weight: bold">
				    				<a href="{{$comentario->link}}"> ver {{ $comentario->publicacion }}</a>
				    				<hr>
				    			</td>
				    			<td width="10px">
				    					{!! Form::open(['route'=>['comments.destroy', $comentario->id], 'method' => 'DELETE']) !!}
				    					<button class="btn btn-danger btn-sm">
				    						Eliminar
				    					</button>
				    				{!! Form::close() !!}
				    			</td>
				    		</tr>
				    		@endforeach
				    	</tbody>
				    </table>
			    {{ $comentarios->render() }}
 				</div>
 			</div>
 		</div>
 	</div>
</div>
 @endsection