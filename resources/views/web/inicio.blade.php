@extends('layouts.construct')

@section('content')
<div id="proyectos"></div>

    <!--Proyetos-->
    <div class="site-section">
      <div class="container">
        <div class="row mb-8">

          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Nuestros Proyectos</h2>
          </div>
        </div>


        <div class="row">
          @foreach($images as $image)
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="{{$image->file}}" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">{{$image->name}}</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>{{$image->name}}</span></a>
              </div>

            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!--end proyectos-->


    <!--Blog-->
    <!-- <div class="site-section">
      <div class="container">
        <div class="row mb-4">

          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Our Blog</h2>
          </div>

        </div>

        <div class="row">
          @foreach($posts as $post)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="{{$post->file}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">{{$post->name}}</a></h2>
                <span class="meta d-inline-block mb-3">{{ \Carbon\Carbon::parse($post->created_at)->format('M d Y')}} <span class="mx-2">por</span> <a href="#">{{$post->user->name}}</a></span>
                <p>{{$post->excerpt}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div> -->
    <!--end Blog-->
@endsection

@section('servicios')
<!--servicios-->
<div id="servicios"></div>
  <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8 mx-auto">
            <h2 class="line-bottom text-center">Nuestros Servicios</h2>
            <p class="text-center">Excavación, Demolición, Movimiento de suelos, Redes cloacales, Cableado de Baja-Media-Alta Tensión, Poda en Altura, Extracciones y corte de raíces de árboles</p>
          </div>
        </div>
        <hr>
        <div class="row align-items-stretch">
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/servicios/excavaciones.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Excavación</span></h3>
              <p>Somos Líderes en Movimiento de Suelos y Acondicionamiento de Rutas</p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/servicios/demolicion.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Demolición</span></h3>
              <p>Demolición, Excavación, Civiles e Industriales y de Altura</p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/servicios/movimiento-de-suelos.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Movimiento de suelos</span></h3>
              <p>Contamos con un equipo calificado y con amplia experiencia</p>

            </div>
          </div>


          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/servicios/redes-cloacales.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Redes cloacales</span></h3>
              <p>Soluciones en destapaciones mecanizadas y desagotes en hogares, industria y comercios</p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/servicios/cableado-alta-media-baja-tension.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Cableado de Baja-Media-Alta Tensión</span></h3>
              <p>Especialistas en electrificaciones, en alta, media y baja tensión para centros comerciales, hospitales, hoteles, fraccionamientos, ranchos</p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/servicios/trabajos-en-altura.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Poda en Altura</span></h3>
              <p>Disponemos de todas las herramientas y maquinarias necesarias para realizar un excelente trabajo. </p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/servicios/extraxcciones-podas.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Extracciones y corte de raíces de árboles</span></h3>
              <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

            </div>
          </div>
        </div>
      </div>
    </div>
    
  <!--end servicios--->
  @endsection



