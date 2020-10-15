@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-10">
            <div class="card" style="width: 100%">
                <div class="card-header">
                    Ver Pre categoría
                </div>

                <div class="card-body">
                    <p><strong>Nombre</strong> {{ $precategory->name }}</p>
                    <p><strong>Slug</strong> {{ $precategory->slug }}</p>
                    <p><strong>Descripción</strong> {{ $precategory->body }}</p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
