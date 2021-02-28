<!doctype html>
<html lang="es">

  <head>
    <title>Alquiler de Maquinas Viales</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="alquiler de maquinas viales, alquiler de maquinarias viales, maquinas viales pesadas, maquinas viales, zona norte, maquinas viales en zona norte"/>

    @include('includes.links')
    @yield('facebookgraph')

  </head>

  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v9.0&appId=971270740036430&autoLogAppEvents=1" nonce="DjIZ37gY"></script>

    
    <div class="site-wrap" id="home-section">

      <div class="site-mobile-menu site-navbar-target">
        <div class="site-mobile-menu-header">
          <div class="site-mobile-menu-close mt-3">
            <span class="icon-close2 js-menu-toggle"></span>
          </div>
        </div>
        <div class="site-mobile-menu-body"></div>
      </div>



      <header class="site-navbar site-navbar-target" role="banner">

        <div class="container">
          <div class="row align-items-center position-relative">

            <div class="col-9 col-md-3">
              <div class="site-logo">
                <a href="index.html"><img src="{{asset('assets/images/logo-04.png')}}" class="img-fluid"></a>
              </div>
            </div>

            <div class="col-3 col-md-9 text-right">
              

              <span class="d-inline-block d-lg-none"><a href="#" class="text-white site-menu-toggle js-menu-toggle py-5 text-white"><span class="icon-menu h3 text-white"></span></a></span>
              <nav class="site-navigation text-right ml-auto d-none d-lg-block" role="navigation">
                <ul class="site-menu main-menu js-clone-nav ml-auto ">
                  <li class="active"><a href="{{url('/')}}" class="nav-link">Inicio</a></li>
                  <li><a href="{{url('/')}}#nosotros" class="nav-link">Nosotros</a></li>
                  <li><a href="{{url('/')}}#servicios" class="nav-link">Servicios</a></li>
                  <li><a href="{{url('/alquiler-de-maquinaria')}}#alquiler-de-maquinaria-pesada" class="nav-link">Alquiler</a></li>
                  <li><a href="{{url('/')}}#galeria-de-imagenes" class="nav-link">Imágenes</a></li>
<!--                   <li><a href="blog.html" class="nav-link">Publicaciones</a></li> -->
                  <li><a href="https://wa.link/i5yise" class="nav-link"><i class="lni lni-whatsapp"></i> 54 - 11 388-72953</a></li>
                </ul>
              </nav>
            </div>

            
          </div>
        </div>

      </header>


      <div class="ftco-blocks-cover-1">
      <div class="ftco-cover-1 overlay backgrounds">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-5">
              <h1 class="line-bottom">Ofrecemos Un Excelente Servicio A Los Mejores Precios</h1>
              <a href="{{url('/')}}#nosotros" type="button" class="btn btn-light">Ver Más</a>
            </div>
          </div>
        </div>
      </div>
    </div>

    
    @yield('content')
  


   <!--nosotros-->
    <div class="site-section" id="nosotros">
      <div class="container">
        
        <div class="row mb-5">
          <div class="col-md-4 mr-auto">
            <h2 class="line-bottom">Un Excelente Servicio A Los Mejores Precios</h2>

          </div>
          <div class="col-md-8 text-right">
            <nav class="custom-tab nav" role="tablist"  class="nav nav-tabs" id="nav-tab" role="tablist">
              <a href="#nav-one" class="nav-item nav-link active" data-toggle="tab" role="tab"  aria-controls="nav-one" aria-selected="true">Alquileres</a>
              <a href="#nav-two" class="nav-item nav-link" data-toggle="tab" role="tab" aria-controls="nav-two" aria-selected="false">Servicios</a>

            </nav>
          </div>
        </div>

        <div class="row">
          <div class="col-12">
            <div class="tab-content" id="nav-tabContent">
              <div class="tab-pane fade show active" id="nav-one" role="tabpanel" aria-labelledby="nav-one-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="{{asset('assets/images/huges_ok.jpg')}}" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Alquileres</h2>
                    <p>Alquiler de camiones volcadores, máquinas viales, retro-pala, retro-oruga, bobcat con accesorios e hidroelevadores</p>
                    <a href="{{url('/alquiler-de-maquinaria')}}#alquiler-de-maquinaria-pesada" type="button" class="btn btn-secondary">Ver más </a>
                  </div>
                </div>
              </div>
              <div class="tab-pane fade" id="nav-two" role="tabpanel" aria-labelledby="nav-two-tab">
                <div class="row">
                  <div class="col-md-7">
                    <img src="{{asset('assets/images/hero_2.jpg')}}" alt="Image" class="img-fluid">
                  </div>
                  <div class="col-md-4 ml-auto">
                    <h2 class="line-bottom">Servicios</h2>
                    <p>Cuadrillas de veredas y zanjeos, limpiezas de obras, movimientos de suelos, excavación, demolición, desmontes, poda en altura, extracción y corte de raíces</p>
                    <a href="{{url('/')}}#servicios" type="button" class="btn btn-secondary">Ver más </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--end nosotros-->



    <!--testimonios-->
    <!-- <div class="site-section bg-light">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Testimonials</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="testimonial-3">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure id accusantium similique temporibus nihil blanditiis adipisci aperiam, sapiente suscipit vero.</blockquote>
              <div class="vcard d-flex align-items-center">
                <div class="img-wrap mr-3">
                  <img src="{{asset('assets/images/person_1.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div>
                  <span class="d-block">John Smith</span>
                  <span class="position">Client From Facebook</span>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="testimonial-3">
              <blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure id accusantium similique temporibus nihil blanditiis adipisci aperiam, sapiente suscipit vero.</blockquote>
              <div class="vcard d-flex align-items-center">
                <div class="img-wrap mr-3">
                  <img src="{{asset('assets/images/person_2.jpg')}}" alt="Image" class="img-fluid">
                </div>
                <div>
                  <span class="d-block">John Smith</span>
                  <span class="position">Client From Facebook</span>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
    <!--end testimonios-->
    

    <footer class="site-footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3">

            <h2 class="footer-heading mb-4"><img src="{{asset('assets/images/logo_white.png')}}" class="img-fluid"></h2>
                <p>Somos una empresa en constante crecimiento. Trabajamos en el área de la construcción. Realizamos movimiento de suelos, demoliciones, extracciones, poda en altura, cableado de alta, media y baja tensión.</p>
                <ul class="list-unstyled">
                  <li><a href="https://wa.link/i5yise"><i class="lni lni-whatsapp"></i> 54 - 11 388-72953</a></li>
                  <li><a href="https://www.facebook.com/Alquiler-de-hidroelevadores-100641635200338"><i class="lni lni-facebook-original"></i> facebook</a></li>
                </ul>
          </div>
          <div class="col-lg-8 ml-auto">
            <div class="row">
              <div class="col-lg-3">
                <h2 class="footer-heading mb-4">Links</h2>
                <ul class="list-unstyled">
                  <li><a href="{{url('/')}}">Inicio</a></li>
                  <li><a href="{{url('/')}}#nosotros">Nosotros</a></li>
                  <li><a href="{{url('/')}}#servicios">Servicios</a></li>
                  <li><a href="{{url('/alquiler-de-maquinaria')}}#alquiler-de-maquinaria-pesada">Alquiler</a></li>
                  <li><a href="{{url('/')}}#galeria-de-imagenes">Galería de Imágenes</a></li>
                </ul>
              </div>
              
             
              <div class="col-lg-6">
                <h2 class="footer-heading mb-4">Imágenes</h2>
                <div class="row">
                  @foreach($images as $image)
                  <div class="col-4 mb-3">
                    <div class="project-item">
                        <a class="" href="#">
                          <img src="{{$image->file}}" data-url="{{$image->file}}" alt="{{$image->name}}" class="fs-gal img-fluid">
                        </a>
                    </div>
                  </div>
                  @endforeach
                  <div class="fs-gal-view">
                      <h1></h1>
                      <img class="fs-gal-prev fs-gal-nav" src="{{asset('assets/img/prev.svg')}}" alt="Previous picture" title="Previous picture" />
                      <img class="fs-gal-next fs-gal-nav" src="{{asset('assets/img/next.svg')}}" alt="Next picture" title="Next picture" />
                      <img class="fs-gal-close" src="{{asset('assets/img/close.svg')}}" alt="Close gallery" title="Close gallery" />
                      <img class="fs-gal-main" src="" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row pt-5 mt-5 text-center">
          <div class="col-md-12">
            <div class="border-top pt-5">
              <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> Derechos Reservados | Desarrollado por <a href="https://jofret.com" target="_blank" >JOfret</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
            </div>
          </div>

        </div>
      </div>
    </footer>

    </div>

    @include('includes.scripts')
    @yield('scripts') 
  </body>

</html>

