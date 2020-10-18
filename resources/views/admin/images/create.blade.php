@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-10">
            <div class="card" style="width: 100%">
                <div class="card-header">
                    Crear Imagen
                </div>

                <div class="card-body">
                    {!! Form::open(['route' => 'images.store','files' => true]) !!}
                        
                        @include('admin.images.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
