@extends('layouts.categories')
@section('title')
Revista el Sendero: Publicaciones
@endsection
@section('titulosCabecera')
<h5 class="text-uppercase" style="color:white"><span style="font-weight: 300">Revista-el-Sendero/</span>Edición:</h5>
<h1 class="text-uppercase">{{$categoryName}}</h1>
@endsection
@section('content')
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
              <div class="post-category">
                
              </div>
              <h3 class="post-title title-lg"><a href="{{route('trailer' , $lastTrailer->slug)}}">{{$lastTrailer->name}}</a></h3>
              <ul class="post-meta">
                <li><li>Admin:</li></li>
                <li>{{ \Carbon\Carbon::parse($lastTrailer->created_at)->format('M d Y')}} </li>
              </ul>
            </div>
          </div>
          <!-- /post -->
          <div class="row">
            @foreach($trailers as $trailer)
            <!-- post -->
            <div class="col-md-4">
              <div class="post post-sm">
                <a class="post-img" href="{{route('trailer' , $trailer->slug)}}"><img src="{{$trailer->file2}}" alt=""></a>
                <div class="post-body">
                  <div class="post-category">
                    <a href="{{route('trailer' , $trailer->slug)}}">{{$trailer->category->name}}</a>
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
          </div>

          <!--en esta parte pegar de historias-->

          <!-- <div class="section-row loadmore text-center">
            <a href="#" class="primary-button">Load More</a>
          </div> -->
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

          <!--ediciones-->
          @include('includes.ediciones')
          <!--end ediciones-->

          <!-- category widget -->
          @include('includes.category')
          <!-- /category widget -->


          <!-- newsletter widget -->
          @include('includes.suscriptions')
          <!-- /newsletter widget -->

          <!-- lastTrailers widget -->
          @include('includes.lastPosts')
          <!-- lastTrailers widget -->

          <!-- galery widget -->
          @include('includes.galery')
          <!-- galery widget -->

        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
@endsection
