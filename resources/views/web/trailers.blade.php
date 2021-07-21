@extends('layouts.categories')
@section('title')
Ediciones Impresas Trilers
@endsection
@section('titulosCabecera')
<h1 class="text-uppercase">Ediciones Impresas - <span style="font-style: italic"> -- Trailers</h1>
@endsection

@section('content')
    
<!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-8">
          <!-- post -->
          <div class="post post-thumb">
            <a class="post-img" href="{{route('trailer' , $lastTrailer->slug)}}"><img src="{{$lastTrailer->file}}" alt=""></a>
            <div class="post-body">
              <h3 class="post-title title-lg"><a href="{{route('trailer' , $lastTrailer->slug)}}">{{$lastTrailer->name}}</a></h3>
              <ul class="post-meta">
                <li>Admin:</li>
                <li>{{ \Carbon\Carbon::parse($lastTrailer->created_at)->format('M d Y')}} </li>
              </ul>
            </div>
          </div>
          <!-- /post -->
          <div class="row">
            <div class="col-md-12">
              <div class="section-title">
                <h2 class="title">Ediciones Impresas - <span style="font-style:italic; color:#999; ">Trailers</span></h2>
              </div>
            </div>

            @foreach($trailers as $trailer)
            <!-- post -->
            <div class="col-md-4">
              <div class="post post-sm">
                <a class="post-img" href="{{route('trailer' , $trailer->slug)}}"><img src="{{$trailer->file2}}" alt=""></a>
                <div class="post-body">
                  <div class="post-category">
                    <a href="category.html">{{$trailer->category->name}}</a>
                  </div>
                  <h3 class="post-title title-sm"><a href="#">{{$trailer->name}}</a></h3>
                  <ul class="post-meta">
                    <li>Admin:</li>
                    <li>{{ \Carbon\Carbon::parse($trailer->created_at)->format('M d Y')}}</li>
                  </ul>
                </div>
              </div>
            </div>
            <!-- /post -->
            @endforeach

            <!--AQUI EDICIONES - TRAILERS-->
          </div>
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

          <!-- category widget -->
          <div class="aside-widget">
            <div class="section-title">
              <h2 class="title">Ediciones</h2>
            </div>
            <div class="category-widget">
              <ul>
                @foreach($ediciones as $edicion)
                <li><a href="">{{$edicion->name}} <span>
                  </span></a></li>
                @endforeach
              </ul>
            </div>
          </div>
          <!-- /category widget -->

          @include('includes.category')


          <!-- newsletter widget -->
          @include('includes.suscriptions')
          <!-- /newsletter widget -->

          <!-- lastPosts widget -->
          @include('includes.lastPosts')
          <!-- lastPosts widget -->

          <!-- galery widget -->
          @include('includes.galery')
          <!-- galery widget -->

        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
  <!-- /SECTION -->
    
@endsection

