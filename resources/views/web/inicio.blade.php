@extends('layouts.layout_el_sendero')

@section('facebookgraph')
<!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
      <meta property="og:url"           content="https://alquilerdemaquinasviales.com.ar"/>
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="Alquiler de Maquinas Viales Telefono: 1138872953" />
      <meta property="og:description"   content="Trabajamos en el área de la construcción. Realizamos movimiento de suelos, demoliciones, extracciones, poda en altura, cableado de alta, media y baja tensión" />
      <meta property="og:image"         content="https://alquilerdemaquinasviales.com.ar/assets/images/huges_ok.jpg" />
@endsection

@section('content')

<!-- SECTION -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-8">

          <!--AQUI PUBLICACIONES-->
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <div class="section-title">
                <h2 class="title">Publicaciones</h2>
              </div>
            </div>
            <!-- post -->
            @foreach($posts as $post)
            <div class="col-md-6">
              <div class="post">
                <a class="post-img" href="blog-post.html"><img src="{{$post->file}}" alt=""></a>
                <div class="post-body">
                  <div class="post-category">
                    <a href="category.html">{{$post->category->name}}</a>
                  </div>
                  <h3 class="post-title"><a href="blog-post.html">{{$post->name}}</a></h3>
                  <ul class="post-meta">
                    <li><a href="author.html">{{$post->user->name}}</a></li>
                    <li> {{ \Carbon\Carbon::parse($post->created_at)->format('M d Y')}} </li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /post -->
            @endforeach

            
          </div>
          <!-- /row -->
          <!--END PUBLICACIONES-->

          

        </div>
        <div class="col-md-4">
          <!-- ad widget-->
          <!-- <div class="aside-widget text-center">
            <a href="#" style="display: inline-block;margin: auto;">
              <img class="img-responsive" src="./img/ad-3.jpg" alt="">
            </a>
          </div> -->
          <!-- /ad widget -->

          <!-- social widget -->
          <!-- <div class="aside-widget">
            <div class="section-title">
              <h2 class="title">Social Media</h2>
            </div>
            <div class="social-widget">
              <ul>
                <li>
                  <a href="#" class="social-facebook">
                    <i class="fa fa-facebook"></i>
                    <span>21.2K<br>Followers</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="social-twitter">
                    <i class="fa fa-twitter"></i>
                    <span>10.2K<br>Followers</span>
                  </a>
                </li>
                <li>
                  <a href="#" class="social-google-plus">
                    <i class="fa fa-google-plus"></i>
                    <span>5K<br>Followers</span>
                  </a>
                </li>
              </ul>
            </div>
          </div> -->
          <!-- /social widget -->

          <!-- category widget -->
          <div class="aside-widget">
            <div class="section-title">
              <h2 class="title">Categorías</h2>
            </div>
            <div class="category-widget">
              <ul>
                @foreach($categories as $category)
                <li><a href="#">{{$category->name}} <span>{{ $category->posts->count() }}</span></a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <!-- /category widget -->

          <!-- newsletter widget -->
          <!-- 
          --------------------------------------------
          SUSCRIPCIONES-------------------------------
          --------------------------------------------
          <div class="aside-widget">
            <div class="section-title">
              <h2 class="title">Suscripción</h2>
            </div>
            <div class="newsletter-widget">
              <form>
                <p>Ingresa tus datos y nos contactaremos con vos para finalizar la suscrpción</p>
                <input class="input" name="name" placeholder="Tu Nombre">
                <input class="input" name="telephon" placeholder="Teléfono">
                <input class="input" name="email" placeholder="Email">
                <button class="primary-button">Subscribirme</button>
              </form>
            </div>
          </div> 
          --------------------------------------------
          END SUSCRIPCIONES---------------------------
          --------------------------------------------
          -->
          <!-- /newsletter widget -->

          <!-- post widget -->

          <!-- /post widget -->

          <!-- galery widget -->
          <div class="aside-widget">
            <div class="section-title">
              <h2 class="title">Galería</h2>
            </div>
            <div class="galery-widget">
              <ul>
                @foreach($images as $image)
                <li><a href="#"><img src="{{$image->file}}" alt=""></a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <!-- /galery widget -->
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
<!-- /SECTION -->

@endsection





