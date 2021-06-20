<!-- FOOTER -->
  <footer id="footer">
    <!-- container -->
    <div class="container">
      <!-- row -->
      <div class="row">
        <div class="col-md-3">
          <div class="footer-widget">
            <div class="footer-logo">
              <h2 style="color:white">El Sendero</h2>
              <!-- <a href="index.html" class="logo">El Sendero<img src="./img/logo-alt.png" alt=""></a> -->
            </div>
            <p>Nec feugiat nisl pretium fusce id velit ut tortor pretium. Nisl purus in mollis nunc sed. Nunc non blandit massa enim nec.</p>
            <ul class="contact-social">
              <li><a href="#" class="social-facebook"><i class="fa fa-facebook"></i></a></li>
            </ul>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-widget">
            <h3 class="footer-title">Categorías</h3>
            <div class="category-widget">
              <ul>
                @foreach($categories as $category)
                  <li>
                    <a href="{{route('category' , $category->slug)}}">{{$category->name}} <span>{{ $category->posts->count() }}</span></a>
                  </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-widget">
            <h3 class="footer-title">Filtro de Etiquetas</h3>
            <div class="tags-widget">
              <ul>
                @foreach($plans as $plan)
                <li>
                  <a href="{{route('tag', $plan->slug)}}">{{$plan->name}}</a>
                 </li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="footer-widget">
            <h3 class="footer-title">Escribinos</h3>
            <div class="newsletter-widget">
              <form>
                <p><strong>Revista-el-sendero@aa.org.ar</strong></p>
                <a href="#" type="button" class="primary-button">Escribinos</a>
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- /row -->

      <!-- row -->
      <div class="footer-bottom row">
        <div class="col-md-6 col-md-push-6">
          <ul class="footer-nav">
            <li><a href="#">Alcoholicos Anónimos</a></li>
            <li><a href="{{url('/galeria-de-imagenes')}}">Galería</a></li>
<!--             <li><a href="#">Suscribite</a></li>
 -->            <li><a href="{{url('/publicaciones')}}">Publicacione</a></li>
            <li><a href="#">Contactanos</a></li>
          </ul>
        </div>
        <div class="col-md-6 col-md-pull-6">
          <div class="footer-copyright">
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | Revista el Sendero - Argentina</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </div>
        </div>
      </div>
      <!-- /row -->
    </div>
    <!-- /container -->
  </footer>
  <!-- /FOOTER -->