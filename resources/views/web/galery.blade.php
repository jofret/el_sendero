@extends('layouts.categories')
@section('title')
Revista el Sendero: Galería de Imágenes
@endsection
@section('titulosCabecera')
<h1 class="text-uppercase">Galería de Imágenes</h1>
@endsection

@section('content')
<div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-8">
          <div class="row">

            @foreach($images as $image)

            <!-- post -->
            <div class="col-md-6">
              <div style="font-size: 13px; height:25px;">
                <strong>
                  @foreach($image->tags as $tag)
                  <i class="lni lni-tag"></i> <a href="{{ route('tagImage', $tag->slug)}}" class="tag-cloud-link">{{$tag->name}}</a>
                  @endforeach
                </strong>
              </div>
              <div class="post gallery">
                <a class="post-img" href="{{$image->file}}"><img src="{{$image->file}}" alt="{{$image->name}}" class="galery" ></a>
                <div>
                  <p style="font-size: 11px; height:15px;" class="post-title"><strong>Titulo: </strong>{{$image->name}}</p>
                </div>
              </div>
            </div>
            <!-- /post -->
            @endforeach
          </div>
          {{ $images->render() }}

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


        </div>

      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </div>
@endsection
