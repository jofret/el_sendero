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

<div class="form-group">
	<div class="col-md-6">
	{{ Form::label('youtube', 'ID Youtube video') }}
	{{ Form::text('youtube_video_code', null, ['class' => 'form-control', 'id' => 'youtube_video_code']) }}
	</div>
</div>

<div class="form-group">
    {{ Form::label('file', 'Imagen') }}
    {{ Form::file('file') }}
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