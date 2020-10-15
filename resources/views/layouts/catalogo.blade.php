<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Catalogo de Productos</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    @include('includes.links')
  </head>
  <body>
    
	  @include('includes.nav')
    <!-- END nav -->
    
    <section class="hero-wrap hero-wrap-2 ftco-degree-bg js-fullheight backgrounds" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="overlay-2"></div>
      <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 mb-5 text-center">
            <h1 class="mb-3 bread">Nuestros Productos</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.html">Home <i class="ion-ios-arrow-forward"></i></a></span> <span>Blog Single<i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
    <div id="acuario-nautilos"></div>

    

  @yield('content')
		

  @include('includes.footer')
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @include('includes.scripts')
    
  </body>
</html>