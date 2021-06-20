<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Revista el sendero</title>

	@include('includes.links')

</head>

<body>
	<header id="header">
		<!-- NAV -->
			@include('includes.header')
		<!-- /NAV -->
	</header>
	

	<!-- SECTION -->
	<div class="section">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div id="hot-post" class="row hot-post">
				<div class="col-md-12 hot-post-left">
					<!-- post -->
					<div class="post post-thumb">
						<a class="post-img" href="blog-post.html"><img src="{{asset('assets./img/logo-ok.jpg')}}" alt=""></a>
						<div class="post-body">
							<div class="post-category">
								<a>Edición 0</a>
							</div>
							<h3 class="post-title title-lg"><a>Revista Nacional Edición de Lanzamiento</a></h3>
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
	<!-- /SECTION -->

 	@yield('content')

	<!-- FOOTER -->
	@include('includes.footer')
	<!-- /FOOTER -->

	@include('includes.scripts')

</body>

</html>
