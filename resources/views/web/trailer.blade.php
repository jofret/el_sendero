@extends('layouts.categories')
@section('title')
{{$trailer->name}}
@endsection
@section('titulosCabecera')
<h4 class="text-uppercase" style="color:white">Revista El Sendero <span style="font-style: italic"> -- Avances</span></h4>
<h1 class="text-uppercase">{{$trailer->name}}</h1>

@endsection

@section('content')
    
<!-- section -->
  <div class="section">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-8">
          <!-- post share -->
          <!-- <div class="section-row">
            <div class="post-share">
              <a href="#" class="social-facebook"><i class="fa fa-facebook"></i><span>Share</span></a>
              <a href="#" class="social-twitter"><i class="fa fa-twitter"></i><span>Tweet</span></a>
              <a href="#" class="social-pinterest"><i class="fa fa-pinterest"></i><span>Pin</span></a>
              <a href="#" ><i class="fa fa-envelope"></i><span>Email</span></a>
            </div>
          </div> -->
          <!-- /post share -->

          <!-- post content -->
          <div class="section-row">
            <figure class="pull-right">
              <img src="{{$trailer->file}}" alt="{{$trailer->name}}">
            </figure>
            <h5>{{$trailer->category->name}} 
              @if($trailer->category->status == "EDICION_AGOTADA")
              <span style="color:red"> -- Edición Agotada</span>
              @endif

            </h5>
            <h3>{{$trailer->name}}</h3>
            {!! $trailer->body !!}
            
            <blockquote class="blockquote">
              <p>{{$trailer->excerpt}}</p>
              <footer class="blockquote-footer">Admin</footer>
            </blockquote>
            <div id="main_contact_form">>
              @include('includes.errors')
              <form action="{{ route('create.message') }}#main_contact_form" method="POST">
                {{ csrf_field() }}
                
                <input class="input" name="trailer_id" type="hidden" value="{{$trailer->id}}">
                <input class="input" name="publicacion" type="hidden" value="trailer">
                <input class="input" name="link" type="hidden" 
                value="{{asset('edicion-impresa/'.$trailer->slug)}}">

                
                @include('includes.coment_form_contact')
              </form>
            </div>
            <!-- post comments -->
            <div class="section-row" style="margin-top:20px">
              <div class="section-title">
                <h3 class="title">{{$comentarios->count()}} Comentarios</h3>
              </div>
              <div class="post-comments">
                @foreach($comentarios as $comentario)
                <!-- comment -->
                <div class="media">
                  <div class="media-left">
                    <img class="media-object" src="./img/avatar-2.jpg" alt="">
                  </div>
                  <div class="media-body">
                    <div class="media-heading">
                      <h4>{{$comentario->name}}</h4>
                      <span class="time">{{ \Carbon\Carbon::parse($comentario->created_at)->format('M d Y')}}</span>
                    </div>
                    <p>{{$comentario->body}}</p>
                    <!-- <a href="#" class="reply">Reply</a> -->
                    @if($comentario->respuesta)
                    <!-- comment -->
                    <div class="media media-author">
                      <div class="media-left">
                        <img class="media-object" src="./img/avatar-1.jpg" alt="">
                      </div>
                      <div class="media-body">
                        <div class="media-heading">
                          <h4>Admin respondió:</h4>
                          <span class="time">5 min ago</span>
                        </div>
                        <p>{!!$comentario->respuesta!!}</p>
                        <hr>
                        <!-- <a href="#" class="reply">Reply</a> -->
                      </div>
                    </div>
                    <!-- /comment -->
                    @endif
                  </div>
                </div>
                <!-- /comment -->
                @endforeach

              </div>
            </div>
            <!-- /post comments -->
          </div>
          <!-- /post content -->

          

          <!-- post nav -->
          <!-- <div class="section-row">
            <div class="post-nav">
              <div class="prev-post">
                <a class="post-img" href="blog-post.html"><img src="./img/widget-8.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">Sed ut perspiciatis, unde omnis iste natus error sit</a></h3>
                <span>Previous post</span>
              </div>

              <div class="next-post">
                <a class="post-img" href="blog-post.html"><img src="./img/widget-10.jpg" alt=""></a>
                <h3 class="post-title"><a href="#">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                <span>Next post</span>
              </div>
            </div>
          </div> -->
          <!-- /post nav  -->

          <!-- post author -->
          <!-- <div class="section-row">
            <div class="section-title">
              <h3 class="title">About <a href="author.html">John Doe</a></h3>
            </div>
            <div class="author media">
              <div class="media-left">
                <a href="author.html">
                  <img class="author-img media-object" src="./img/avatar-1.jpg" alt="">
                </a>
              </div>
              <div class="media-body">
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                <ul class="author-social">
                  <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                  <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                  <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                  <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                </ul>
              </div>
            </div>
          </div> -->
          <!-- /post author -->

          <!-- /related post -->
          <!-- <div>
            <div class="section-title">
              <h3 class="title">Related Posts</h3>
            </div>
            <div class="row">

              <div class="col-md-4">
                <div class="post post-sm">
                  <a class="post-img" href="blog-post.html"><img src="./img/post-4.jpg" alt=""></a>
                  <div class="post-body">
                    <div class="post-category">
                      <a href="category.html">Health</a>
                    </div>
                    <h3 class="post-title title-sm"><a href="blog-post.html">Postea senserit id eos, vivendo periculis ei qui</a></h3>
                    <ul class="post-meta">
                      <li><a href="author.html">John Doe</a></li>
                      <li>20 April 2018</li>
                    </ul>
                  </div>
                </div>
              </div>



              <div class="col-md-4">
                <div class="post post-sm">
                  <a class="post-img" href="blog-post.html"><img src="./img/post-6.jpg" alt=""></a>
                  <div class="post-body">
                    <div class="post-category">
                      <a href="category.html">Fashion</a>
                      <a href="category.html">Lifestyle</a>
                    </div>
                    <h3 class="post-title title-sm"><a href="blog-post.html">Mel ut impetus suscipit tincidunt. Cum id ullum laboramus persequeris.</a></h3>
                    <ul class="post-meta">
                      <li><a href="author.html">John Doe</a></li>
                      <li>20 April 2018</li>
                    </ul>
                  </div>
                </div>
              </div>

              <div class="col-md-4">
                <div class="post post-sm">
                  <a class="post-img" href="blog-post.html"><img src="./img/post-7.jpg" alt=""></a>
                  <div class="post-body">
                    <div class="post-category">
                      <a href="category.html">Health</a>
                      <a href="category.html">Lifestyle</a>
                    </div>
                    <h3 class="post-title title-sm"><a href="blog-post.html">Ne bonorum praesent cum, labitur persequeris definitionem quo cu?</a></h3>
                    <ul class="post-meta">
                      <li><a href="author.html">John Doe</a></li>
                      <li>20 April 2018</li>
                    </ul>
                  </div>
                </div>
              </div>

            </div>
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

          @include('includes.ediciones')

          @include('includes.category')


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
  <!-- /SECTION -->
    
@endsection

