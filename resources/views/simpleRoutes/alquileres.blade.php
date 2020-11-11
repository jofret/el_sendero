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

        @include('includes.galeria_de_imagenes')

      </div>
    </div>
    <!--end proyectos-->
@endsection


@section('servicios')
<!--servicios-->
  <div id="alquiler-de-maquinaria-pesada"></div>
  <div class="site-section">
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
              <p>Servicio de Alquiler de Camiones Volcadores para su Obra</p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/alquileres/hidroelevadores.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Hidroelevador 24m</span></h3>
              <p>Hasta 24 metros para Trabajos En Altura</p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/alquileres/bob_cat_con_pala.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Bobcat con Pala</span></h3>
              <p>Alquiler de Minicargadoras</p>

            </div>
          </div>


          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/alquileres/bob_cat_accs.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Retro-pala</span></h3>
              <p>Somos Especialistas en Trabajos de Movimiento de Tierras</p>

            </div>
          </div>
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="service-2 h-100">
              <div>
                <img src="{{asset('assets/images/alquileres/retro_pala.jpg')}}" alt="Image" class="img-fluid">
              </div>

              <h3><span>Retro-oruga</span></h3>
              <p>Alquiler De Retroexcavadora Pala Con Oruga </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  <!--end servicios--->
  @endsection

