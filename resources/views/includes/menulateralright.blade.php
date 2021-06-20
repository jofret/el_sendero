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

  <!-- post widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">Últimas Publicaciones</h2>
    </div>

    @foreach($lastPosts as $lastPost)
    <!-- post -->
    <div class="post post-widget">
      <a class="post-img" href="blog-post.html"><img src="{{$lastPost->file}}" alt="{{$lastPost->name}}"></a>
      <div class="post-body">
        <div class="post-category">
          <a href="{{route('category' , $category->slug)}}">{{$lastPost->category->name}}</a>
        </div>
        <h3 class="post-title"><a href="blog-post.html">{{$lastPost->name}}</a></h3>
      </div>
    </div>
    <!-- /post -->
    @endforeach

  </div>
  <!-- /post widget -->

  @include('includes.galery')
</div>