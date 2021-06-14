@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-md-center">
        <div class="col-lg-10">
            <div class="card" style="width: 100%">
                <div class="card-header">
                    Imágenes 
                    <a href="{{ route('videos.create') }}" class="btn btn-primary btn-sm float-right">
                        Crear Youtube Video
                    </a>
                </div>

                <div class="panel-body">

                    <table class="table table-striped table-hover">
                        <thead>
                            <tr>
                                <th width="10px">ID</th>
                                <th>Nombre</th>
                                <th colspan="3">&nbsp;</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($videos as $video)
                            <tr>
                                <td>{{ $video->id }}</td>
                                <td>{{ $video->name }}</td>
                                <td width="10px">
                                    <a href="{{ route('videos.show', $video->id) }}" class="btn btn-outline-secondary btn-sm">Ver</a>
                                </td>
                                <td width="10px">
                                    <a href="{{ route('videos.edit', $video->id) }}"  class="btn btn-outline-secondary btn-sm">Editar</a>
                                </td>
                                <td width="10px">
                                    {!! Form::open(['route' => ['videos.destroy', $video->id], 'method' => 'DELETE']) !!}
                                        <button class="btn btn-sm btn-danger">
                                            Eliminar
                                        </button>                           
                                    {!! Form::close() !!}
                                </td>
                            </tr>
                            @endforeach
                        </tbody>   
                    </table>     	

                    {{ $videos->render() }}
                </div>
        </div>
    </div>
</div>

@endsection
