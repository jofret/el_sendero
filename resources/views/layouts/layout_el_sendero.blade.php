<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Revista el sendero</title>

	@include('includes.links')

</head>

<body>
	<!-- HEADER -->
	<header id="header">
		<!-- NAV -->
		<div id="nav">
			<!-- Top Nav -->
			<div id="nav-top">
				<div class="container">
					<!-- social -->
					<ul class="nav-social">
						<li><a href="#"><i class="fa fa-facebook"></i></a></li>
						<!-- <li><a href="#"><i class="fa fa-twitter"></i></a></li>
						<li><a href="#"><i class="fa fa-google-plus"></i></a></li>
						<li><a href="#"><i class="fa fa-instagram"></i></a></li> -->
					</ul>
					<!-- /social -->

					<!-- logo -->
					<div class="nav-logo">
						<a href="#" class="logo"><img src="{{asset('assets/./img/logo-top-ok-maybe.png')}}" alt="" class="img-fluid"></a>
					</div>
					<!-- /logo -->

					<!-- search & aside toggle -->
					<div class="nav-btns">
						<button class="aside-btn"><i class="fa fa-bars"></i></button>
						<!-- <button class="search-btn"><i class="fa fa-search"></i></button> -->
						<div id="nav-search">
							<form>
								<input class="input" name="search" placeholder="Enter your search...">
							</form>
							<button class="nav-close search-close">
								<span></span>
							</button>
						</div>
					</div>
					<!-- /search & aside toggle -->
				</div>
			</div>
			<!-- /Top Nav -->

			<!-- Main Nav -->
			<div id="nav-bottom">
				<div class="container">
					<!-- nav -->
					<ul class="nav-menu">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Galería</a></li>
						<li><a href="#">Suscribite</a></li>
						<li class="has-dropdown">
							<a href="index.html">Publicaciones</a>
							<div class="dropdown">
								<div class="dropdown-body">
									<ul class="dropdown-list">
										@foreach($categories as $category)
						                <li><a href="#">{{$category->name}}</a></li>
						                @endforeach
									</ul>
								</div>
							</div>
						</li>
						<li><a href="#">Contactanos</a></li>
					</ul>
					<!-- /nav -->
				</div>
			</div>
			<!-- /Main Nav -->

			<!-- Aside Nav -->
			<div id="nav-aside">
				<ul class="nav-aside-menu">
					<li><a href="#">Inicio</a></li>
					<li><a href="#">Galería</a></li>
					<li><a href="#">Suscribite</a></li>
					<li class="has-dropdown"><a>Publicaciones</a>
						<ul class="dropdown">
							<li><a href="#">Categoría 1</a></li>
							<li><a href="#">Categoría 2</a></li>
							<li><a href="#">Categoría 3</a></li>
							<li><a href="#">Categoría 4</a></li>
						</ul>
					</li>
					<li><a href="#">Contactanos</a></li>
				</ul>
				<button class="nav-close nav-aside-close"><span></span></button>
			</div>
			<!-- /Aside Nav -->
		</div>
		<!-- /NAV -->
	</header>
	<!-- /HEADER -->

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
								<a href="#">Edición 0</a>
							</div>
							<h3 class="post-title title-lg"><a href="blog-post.html">Revista Nacional Edición de Lanzamiento</a></h3>
							<ul class="post-meta">
								<li><a href="#">Admin</a></li>
								<li>10 Enero 2021</li>
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
	<footer id="footer">
		<!-- container -->
		<div class="container">
			<!-- row -->
			<div class="row">
				<div class="col-md-3">
					<div class="footer-widget">
						<div class="footer-logo">
							<h2 style="color:white">El Sendero</h2>
							<!-- <a href="index.html" class="logo">El Sendero<img src="./img/logo-alt.png" alt=""></a> -->
						</div>
						<p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
						<ul class="contact-social">
							<li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
						</ul>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Categories</h3>
						<div class="category-widget">
							<ul>
								@foreach($categories as $category)
				                <li><a href="#">{{$category->name}} <span>{{ $category->posts->count() }}</span></a></li>
				                @endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Tags</h3>
						<div class="tags-widget">
							<ul>
								@foreach($plans as $plan)
							      <li><a href="{{route('tag', $plan->slug)}}">
							        {{$plan->name}}
						    	  </a></li>
						        @endforeach
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-3">
					<div class="footer-widget">
						<h3 class="footer-title">Escribinos</h3>
						<div class="newsletter-widget">
							<form>
								<p><strong>Revista-el-sendero@aa.org.ar</strong></p>
								<a href="#" type="button" class="primary-button">Escribinos</a>
							</form>
						</div>
					</div>
				</div>
			</div>
			<!-- /row -->

			<!-- row -->
			<div class="footer-bottom row">
				<div class="col-md-6 col-md-push-6">
					<ul class="footer-nav">
						<li><a href="#">Inicio</a></li>
						<li><a href="#">Galería</a></li>
						<li><a href="#">Suscribite</a></li>
						<li><a href="#">Publicacione</a></li>
						<li><a href="#">Contactanos</a></li>
					</ul>
				</div>
				<div class="col-md-6 col-md-pull-6">
					<div class="footer-copyright">
						<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Revista el Sendero - Argentina</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
					</div>
				</div>
			</div>
			<!-- /row -->
		</div>
		<!-- /container -->
	</footer>
	<!-- /FOOTER -->

	@include('includes.scripts')

</body>

</html>
