@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-10">
            <div class="card" style="width: 100%">
                <div class="card-header">
                    Ver Imagen
                </div>

                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $video->name }}</p>
                    <p><strong>Slug</strong> {{ $video->slug }}</p>
                    <p><strong>Video Code</strong>{{ $video->youtube_video_code }}</p>
                </dv>
            </div>
        </div>
    </div>
</div>
@endsection
