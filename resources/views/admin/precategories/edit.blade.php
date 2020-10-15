@extends('layouts.app')

@section('content')
 <div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-10">
            <div class="card" style="width: 100%">
                <div class="card-header">
                    Editar Pre categoría
                </div>

                <div class="card-body">
                    {!! Form::model($precategory, ['route' => ['precategories.update', $precategory->id], 'method' => 'PUT']) !!}
                        
                        @include('admin.precategories.partials.form')

                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
