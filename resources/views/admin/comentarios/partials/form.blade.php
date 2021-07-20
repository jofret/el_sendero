<input class="input" name="body" type="hidden" value="{{$comentario->body}}">
<input class="input" name="link" type="hidden" value="{{$comentario->link}}">
<div class="form-group">
	<p><strong>Nombre: {{$comentario->name}} escribió:</strong></p>
	<input class="input" name="name" type="hidden" value="{{$comentario->name}}">
	{{$comentario->body}}
</div>
<div class="form-group">
	<stron>Email:</stron> {{$comentario->email}}
	<input class="input" name="email" type="hidden" value="{{$comentario->email}}">
</div>
<input class="input" name="fecha_respuesta" type="hidden" value="{{date('F j, Y, g:i a')}}">




<hr>
<div class="form-group">
	{{ Form::label('slug', 'Comentario :') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} Publicar
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT') }} No - Publicar
	</label>
</div>
<hr>


<div class="form-group">
    {{ Form::label('body', 'Respuesta') }}
    {{ Form::textarea('respuesta', null, ['class' => 'form-control']) }}
</div>


<hr>
<div class="form-group">
	{{ Form::label('Notificar', 'Notificar :') }}<br>
	<label>
		{{ Form::radio('notificar', 'Su Comentario Ha Sido publicado') }} Su Comentario Ha Sido publicado
	</label>
	<br>
	<label>
		{{ Form::radio('notificar', 'Su Comentario Ha Sido publicado y respondido') }} Su Comentario Ha Sido publicado y respondido
	</label>
	<br>
	<label>
		{{ Form::radio('notificar', 'Hemos Actualizado Nuestra Respuesta') }} Hemos Actualizado Nuestra Respuesta
	</label>
</div>
<hr>


<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="{{ asset('assets/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script src="{{ asset('assets/ckeditor/ckeditor.js') }}"></script>
<script>
	$(document).ready(function(){
	    $("#name, #slug").stringToSlug({
	        callback: function(text){
	            $('#slug').val(text);
	        }
	    });

	    CKEDITOR.config.height = 400;
		CKEDITOR.config.width  = 'auto';

		CKEDITOR.replace('respuesta');
	});
</script>
@endsection