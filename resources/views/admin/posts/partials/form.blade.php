{{ Form::hidden('user_id', auth()->user()->id) }}

<div class="form-group">
	{{ Form::label('precategory_id', 'Elige una Precategoría') }}
	{{ Form::select('precategory_id', $precategories, null, ['class' => 'form-control']) }}
</div> 
<div class="form-group">
	{{ Form::label('category_id', 'Elige una Categoría') }}
	{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div> 
<div class="form-group">
    {{ Form::label('name', 'Nombre del Artículo para Publicacions') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>
<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<hr>
<!-- <h2><strong>Precio Dólares: </strong></h2>
<div>
	<div class="col-2 form-group">
		{{ Form::label('Precio', 'Precio') }}
		{{ Form::number('pricing', null, ['class' => 'form-control', 'id' => 'desde'])}}
	</div>
</div>
<hr> -->
<div class="container">
<hr>
	<div class="row">
		<div class="col-lg-6 form-group" style="border:1px solid #ddd;padding: 5%">
			<h5>Cargar Imagen Pequeña de la Publicación</h5>
		    {{ Form::label('file', 'Imagen') }}
		    {{ Form::file('file') }}
		</div>

		<div class="col-lg-6 form-group" style="border:1px solid #ddd;padding: 5%">
			<h5>Cargar Imagen Grande de la Publicación</h5>
		    {{ Form::label('file2', 'Imagen') }}
		    {{ Form::file('file2') }}
		</div>
	</div>
<hr>
</div>

<!-- <h5>Otras Imágenes</h5>
<div class="form-group">
    {{ Form::label('file3', 'Imagen') }}
    {{ Form::file('file3') }}
</div>

<div class="form-group">
    {{ Form::label('file4', 'Imagen') }}
    {{ Form::file('file4') }}
</div>

<div class="form-group">
    {{ Form::label('file5', 'Imagen') }}
    {{ Form::file('file5') }}
</div> -->

<div class="form-group">


<div class="form-group">
	{{ Form::label('slug', 'Estado') }}
	<label>
		{{ Form::radio('status', 'PUBLISHED') }} Publicado
	</label>
	<label>
		{{ Form::radio('status', 'DRAFT') }} Borrador
	</label>
</div>
<div class="form-group">
	{{ Form::label('tags', 'Componentes del Producto') }}
	<div>
	@foreach($tags as $tag)
		<label>
			{{ Form::checkbox('tags[]', $tag->id) }} {{ $tag->name }}
		</label>
	@endforeach
	</div>
</div>
<div class="form-group">
    {{ Form::label('excerpt', 'Extracto') }}
    {{ Form::textarea('excerpt', null, ['class' => 'form-control', 'rows' => '2']) }}
</div>
<div class="form-group">
    {{ Form::label('body', 'Descripción') }}
    {{ Form::textarea('body', null, ['class' => 'form-control']) }}
</div>
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

		CKEDITOR.replace('body');
	});
</script>
@endsection