@extends('layouts.categories')
@section('title')
Revista el Sendero: Publicaciones
@endsection
@section('titulosCabecera')
<h1 class="text-uppercase">Publicaciones</h1>
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
            <a class="post-img" href="{{route('post' , $lastPost->slug)}}"><img src="{{$lastPost->file2}}" alt="{{$lastPost->name}}" class="galery"></a>
            <div class="post-body">
              <div class="post-category">
                @foreach($lastPost->tags as $tag)
                <a href="{{ route('tag', $tag->slug)}}">{{$tag->name}}</a>
                @endforeach
              </div>
              <h3 class="post-title title-lg"><a href="{{route('post' , $lastPost->slug)}}" style="font-size:13px; text-transform: uppercase">{{$lastPost->name}}</a></h3>
              <ul class="post-meta">
                <li><li>Admin:</li></li>
                <li>{{ \Carbon\Carbon::parse($lastPost->created_at)->format('M d Y')}} </li>
              </ul>
            </div>
          </div>
          <!-- /post -->
          <div class="row">
            @foreach($posts as $post)

            <!-- post -->
            <div class="col-md-6">
              <div class="post">
                <a class="post-img" href="{{route('post' , $post->slug)}}"><img src="{{$post->file}}" alt="{{$post->name}" class="galery"></a>
                <div class="post-body">
                  <div class="post-category">
                    <a href="{{route('category' , $post->category->slug)}}">{{$post->category->name}}</a>
                  </div>
                  <h3 class="post-title"><a href="{{route('post' , $post->slug)}}">{{$post->name}}</a></h3>
                  <ul class="post-meta">
                    <li><li>Admin:</li></li>
                    <li>{{ \Carbon\Carbon::parse($post->created_at)->format('M d Y')}}</li>
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

          <!-- category widget -->
          @include('includes.category')
          <!-- /category widget -->


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
@endsection
