@extends('layouts.categories')
@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-8">
          <!-- post -->
          <div class="post post-thumb">
            <a class="post-img" href="blog-post.html"><img src="{{$lastPost->file}}" alt=""></a>
            <div class="post-body">
              <div class="post-category">
                @foreach($lastPost->tags as $tag)
                <a href="{{ route('tag', $tag->slug)}}">{{$tag->name}}</a>
                @endforeach
              </div>
              <h3 class="post-title title-lg"><a href="blog-post.html">{{$lastPost->name}}</a></h3>
              <ul class="post-meta">
                <li><a href="author.html">{{$lastPost->user->name}}</a></li>
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
                <a class="post-img" href="blog-post.html"><img src="{{$post->file}}" alt=""></a>
                <div class="post-body">
                  <div class="post-category">
                    <a href="{{route('category' , $post->category->slug)}}">{{$post->category->name}}</a>
                  </div>
                  <h3 class="post-title"><a href="blog-post.html">{{$post->name}}</a></h3>
                  <ul class="post-meta">
                    <li><a href="author.html">John Doe</a></li>
                    <li>20 April 2018</li>
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
