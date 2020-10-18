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
                    <p><strong>Nombre</strong> {{ $image->name }}</p>
                    <p><strong>Slug</strong> {{ $image->slug }}</p>
                    <p><strong>Descripción</strong>{{ $image->body }}</p>
                </dv>
            </div>
        </div>
    </div>
</div>
@endsection
