<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Revista el sendero</title>
	<!--desarrollado por agencia conosur-->

	@include('includes.links')

</head>

<body>
	<!--encuesta -->
	@include('includes.encuesta')
	<!--end encuesta-->

	<header id="header">
		<!-- NAV -->
			@include('includes.header')
		<!-- /NAV -->
	</header>
	

	<div class="section">
    <!-- container -->
	    <div class="container">
	      <!-- row -->
	      <div id="hot-post" class="row hot-post">
	        <div class="col-md-12 hot-post-left">
	          <!-- post -->
	          <div class="post post-thumb">
	            <a class="post-img"><img src="{{asset('assets/img/portada2.jpg')}}" alt=""></a>
	            <div class="post-body">
	              <div class="post-category">
	                <a>Edición 2</a>
	              </div>
	              <h3 class="post-title title-lg"><a>Revista Nacional El Sendero: Siempre Unidos</a></h3>
	              <ul class="post-meta">
	                <li><a>Admin</a></li>
	                <!-- <li>10 Enero 2021</li> -->
	              </ul>
	            </div>
	          </div>
	          <!-- /post -->
	        </div>
	      </div>
	      <!-- /row -->
	    </div>
	    <!-- /container -->
	  </div>

 	@yield('content')

	<!-- FOOTER -->
	@include('includes.footer')
	<!-- /FOOTER -->

	@include('includes.scripts')

</body>

</html>
