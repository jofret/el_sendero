@extends('layouts.app')
@section('encuestas')

   <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    
                                    <span style="color:red">Encuestados: {{$encuestas->count()}}</span>

                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="#">
                                        Televisión: {{$television->count()}}
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Radio: {{$radio->count()}}
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Google: {{$google->count()}}
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Facebook: {{$facebook->count()}}
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        Otros: {{$otros->count()}}
                                    </a>

                                    
                                </div>
                            </li>
@endsection
@section('content')
<div class="content">
	<div class="title m-b-md">
		Jofret.com
	</div>
</div>
@endsection

