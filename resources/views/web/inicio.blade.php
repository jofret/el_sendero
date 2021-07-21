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
                <a class="post-img" href="{{route('post' , $post->slug)}}"><img src="{{$post->file}}" alt="{{$post->name}}" class="galery"></a>
                <div class="post-body">
                  <div class="post-category">
                    <a href="{{route('category' , $post->category->slug)}}">{{$post->category->name}}</a>
                  </div>
                  <h3 class="post-title"><a href="{{route('post' , $post->slug)}}" style="font-size:13px; text-transform: uppercase">{{$post->name}}</a></h3>
                  <ul class="post-meta">
                    <li>Admin:</li>
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

          <!--AQUI EDICIONES - TRAILERS-->
          <!-- row -->
          <div class="row">
            <div class="col-md-12">
              <div class="section-title">
                <h2 class="title">Ediciones Impresas - <span style="font-style:italic; color:#999; ">Trailers</span></h2>
              </div>
            </div>
            @foreach($ediciones as $edicion)
            <!-- post -->
            <div class="col-md-4">
              <div class="post post-sm">
                <a class="post-img" href="{{route('trailercategory', $edicion->slug)}}"><img src="{{$edicion->file}}" alt=""></a>
                <div class="post-body">
                  <ul class="post-meta">
                    <li><a href="{{route('trailercategory', $edicion->slug)}}"><strong>{{$edicion->name}}</strong></a></li>
                    <li>{{ \Carbon\Carbon::parse($edicion->created_at)->format('M d Y')}}</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /post -->
            @endforeach
          </div>
          <!--END EDICIONES - TRAILERS-->
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

          <!-- Category widget -->
          @include('includes.category')
          <!-- /category widget -->    
                    
          @include('includes.suscriptions')

          <!-- /newsletter widget -->

          <!-- galery widget -->
          @include('includes.galery')
          <!-- /galery widget -->
        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
<!-- /SECTION -->

@endsection





