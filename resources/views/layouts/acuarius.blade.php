<!DOCTYPE html>
<html lang="es">
  <head>
    <title>Findstate - Free Bootstrap 4 Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('includes.links')
  </head>
  <body>
    @include('includes.nav')
    
    <div class="hero-wrap backgrounds" data-stellar-background-ratio="0.5">
      
      <!--olas-->
      <div class="olas"><img src="{{asset('assets/images/olas.png')}}" class="img-fluid"></div>
     
      <!--hasta aqui olas-->

      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
          <div class="col-lg-12 col-md-6 ftco-animate d-flex align-items-end">
            <div class="text text-left w-100">
              <h1 class="mb-4">Ven, Disfruta y Sé Parte de un   <br>Maravilloso Mundo Acuático</h1>
              <p><a href="#" class="btn btn-warning py-3 px-4">Más Sobre Nautilus</a></p>
            </div>
          </div>
        </div>
      </div>
      <div class="mouse">
        <a href="#" class="mouse-icon">
          <div class="mouse-wheel"><span class="ion-ios-arrow-round-down"></span></div>
        </a>
      </div>
    </div>

    <section class="ftco-section goto-here">
      <div class="container pb-5" >
        <div class="row justify-content-center">
              <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Visítanos</span>
                <h2 class="mb-2 titules">DESCUBRE EL ACUARIO</h2>
              </div>
            </div>

            <div class="row">
                <div class="col-lg-6">
                    <div style="position:relative;">
                        <video width="100%"  autoplay muted loop style="padding: 0 5%">
                           <source  src="{{asset('assets/video/video_para_web.mp4')}}" type="video/mp4">
                        </video>
                        <img style="position:absolute; left:0" src="{{asset('assets/images/whale-1-1024x488.png')}}" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-6">
                    <div>
                        <!-- <h2>DESCUBRE EL ACUARIO</h2> -->
                        <p>Acuario Nautilus, el acuario más grande y moderno del Perú. Situado en un ambiente abierto, ofrecemos la oportunidad de vivir una experiencia única en sintonía con la naturaleza acuática con el objeto de que cada visitante adquiera conocimientos y desarrolle conductas que vayan de la mano con el cuidado del medio ambiente y preservación de nuestra biodiversidad acuática.<br><br>
                            Eche un vistazo a una de nuestras increíbles exhibiciones. Nautilus acuarios abre al publico todos los días.<br>Tenemos un promedio de 300,000 visitantes anuales</p>
                        <button class="btn btn-primary">Entradas y Reserva</button> <button class="btn btn-warning">Excursión Educativa Virtual</button>
                    </div>
                </div>
                
            </div>
      </div>

    </section>


    @yield('content')

    @include('includes.footer')

    
  

  <!-- loader
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div> -->
    
    @include('includes.scripts')
    
  </body>
</html>