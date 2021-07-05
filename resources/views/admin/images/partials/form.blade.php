<div class="form-group">
	{{ Form::label('precategory_id', 'Elige una Precategoría') }}
	{{ Form::select('precategory_id', $precategories, null, ['class' => 'form-control']) }}
</div> 

<div class="form-group">
	{{ Form::label('category_id', 'Elige una Categoría') }}
	{{ Form::select('category_id', $categories, null, ['class' => 'form-control']) }}
</div> 

<div class="form-group">
    {{ Form::label('name', 'Nombre') }}
    {{ Form::text('name', null, ['class' => 'form-control', 'id' => 'name']) }}
</div>



<div class="form-group">
    {{ Form::label('slug', 'URL amigable') }}
    {{ Form::text('slug', null, ['class' => 'form-control', 'id' => 'slug']) }}
</div>

<hr>

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

<div class="form-group">
    {{ Form::submit('Guardar', ['class' => 'btn btn-sm btn-primary']) }}
</div>

@section('scripts')
<script src="{{ asset('assets/stringToSlug/jquery.stringToSlug.min.js') }}"></script>
<script>
	$(document).ready(function(){
		$("#name, #slug").stringToSlug({
			callback: function(text){
				$("#slug").val(text);
			}
		});
	});
</script>
@endsection