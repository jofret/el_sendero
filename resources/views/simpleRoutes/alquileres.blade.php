@extends('layouts.construct')

@section('content')
<div id="nautilus"></div>

    <!--Proyetos-->
    <div class="site-section">
      <div class="container">
        <div class="row mb-4">

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
@endsection


@section('servicios')
<!--servicios-->
  <div id="alquiler-de-maquinaria-pesada"></div>
  <div class="site-section" style="background-color: #dedffe;">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-8 mx-auto">
            <h2 class="line-bottom text-center">Servicios de Alquiler</h2>
            <p class="text-center">Tenemos lo que buscás en maquinarias para movimiento de suelo, demolición, elevación, entre otros.</p>
          </div>
        </div>
        <hr>
        <div class="row align-items-stretch">
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/alquileres/camiones_volcadores.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Camiones volcadores</span></h3>
              <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/alquileres/hidroelevadores.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Hidroelevador 24m</span></h3>
              <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/alquileres/bob_cat_con_pala.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Bobcat con pala</span></h3>
              <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

            </div>
          </div>


          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/alquileres/bob_cat_accs.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Retro-pala</span></h3>
              <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/alquileres/retro_pala.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Retro-oruga</span></h3>
              <p>Consectetur adipisicing elit. Numquam repellendus aut labore</p>

            </div>
          </div>
        </div>
      </div>
    </div>
  <!--end servicios--->
  @endsection

