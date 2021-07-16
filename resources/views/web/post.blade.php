@extends('layouts.categories')
@section('title')
{{$post->name}}
@endsection
@section('titulosCabecera')
<h4 class="text-uppercase" style="color:white"><span style="font-weight: 300">Publicaciones/</span><a href="{{route('category', $post->category->slug)}}" style="color:white">{{$post->category->name}}</a>:</h4>
<h1 class="text-uppercase">{{$post->name}}</h1>
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
              <img src="{{$post->file2}}" alt="{{$post->name}}">
            </figure>
            <h5><a href="{{route('category', $post->category->slug)}}"><span>Categoría: </span>{{$post->category->name}}</a></h5>
            <h3>{{$post->name}}</h3>
            <!-- post tags -->
          <div class="section-row">
            <div class="post-tags">
              <ul>
                <li><i class="lni lni-tag"></i> TAGS:</li>
                <li>
                  @foreach($post->tags as $tag)
                  <a href="{{ route('tag', $tag->slug)}}" class="tag-cloud-link">{{$tag->name}}, </a>
                  @endforeach
                </li>
                
              </ul>
            </div>
          </div>
          <!-- /post tags -->
            {!! $post->body !!}
            
            <blockquote class="blockquote">
              <p>{{$post->excerpt}}</p>
              <footer class="blockquote-footer">Admin</footer>
            </blockquote>

            <!-- <div>
              <div class="section-title">
                <h2 class="title">Comentá</h2>
                @if(count( $errors) > 0)
                    <div class="alert alert-danger" style="margin-top:10px">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <ul>
                            @foreach( $errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                @if ($errors->has('g-recaptcha-response'))
                    <span class="help-block text-danger" role="alert">
                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                    </span>
                @endif

                @if($message = Session::get('success'))
                    <div class="alert alert-success alert-block" style="margin-top:10px">
                        <button type="button" class="close" data-dismiss="alert">x</button>
                        <strong>{{ $message }}</strong>
                    </div>
                @endif
              </div>
              <form>
                {{ csrf_field() }}
                <div class="row">
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="input" type="text" name="name" placeholder="nombre">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="input" type="text" name="surname" placeholder="apellido">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <input class="input" type="email" name="email" placeholder="email">
                    </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                      <textarea class="input" name="message" placeholder="Comentario"></textarea>
                    </div>
                  </div>
                  <div class="col-md-12">
                      {!! NoCaptcha::display() !!}
                  </div>
                  <div class="col-md-12" style="margin-top:20px">
                    <button class="primary-button">Submit</button>
                  </div>  
                </div>
              </form>
            </div> -->
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
          <!-- /social widget -->

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

