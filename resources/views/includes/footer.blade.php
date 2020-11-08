    <footer class="ftco-footer ftco-section">
      <div class="container">
        <img src="{{asset('assets/images/logoBlanco.png')}}" class=" mb-5">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-5">
              
              <div class="block-23 mb-3">
                <ul>
                  <li><span class="icon icon-map-marker"></span><span class="text">Ex fundo Chacra Cerro lt 178, Comas
Altura cuadra 99 de la Av Universitari - Lima - Perú</span></li>
                  <li><a href="#"><span class="icon icon-phone"></span><span class="text">01 543 6228

 <br>01 543 6149</span></a></li>
                  <li><a href="#"><span class="icon icon-envelope pr-4"></span><span class="text">info@yourdomain.com</span></a></li>
                </ul>
              </div>

              <ul class="ftco-footer-social list-unstyled mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-6">
              <h2 class="ftco-heading-2">Visítanos</h2>
              <ul class="list-unstyled">
                <li><a href="{{url('entradas-y-reserva')}}#main_contact_form"><span class="icon-long-arrow-right mr-2"></span>Entradas y Reserva</a></li>
                <li><a href="#"><span class="icon-long-arrow-right mr-2"></span>Excursión Educativa Virtual</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{url('exhibiciones')}}#nautilus"><span class="icon-long-arrow-right mr-2"></span>Exhibiciones</a></li>
                <li><a href="{{url('instalaciones')}}#nautilus"><span class="icon-long-arrow-right mr-2"></span>Instalaciones</a></li>
                <li><a href="{{url('/')}}#nautilus"><span class="icon-long-arrow-right mr-2"></span>Catátogo</a></li>
                <li><a href="{{url('galeria-de-imagenes')}}#ver-imagenes-nautilus"><span class="icon-long-arrow-right mr-2"></span>Ir a la Galeria</a></li>
              </ul>
            </div>
          </div>
          
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Imágenes</h2>
              <div class="col-xs-12">
                <div class="row">
                    @foreach($images as $image)
                    <div class="col-xs-4" style="margin:2%; border:1px solid rgb(250,250,250); padding: 1px">
                      <img src="{{$image->file}}" data-url="{{$image->file}}" style="width:80px; height:55px" class="fs-gal">
                    </div>
                    @endforeach
                  <div class="fs-gal-view">
                      <h1></h1>
                      <img class="fs-gal-prev fs-gal-nav" src="{{asset('assets/img/prev.svg')}}" alt="Previous picture" title="Previous picture" />
                      <img class="fs-gal-next fs-gal-nav" src="{{asset('assets/img/next.svg')}}" alt="Next picture" title="Next picture" />
                      <img class="fs-gal-close" src="{{asset('assets/img/close.svg')}}" alt="Close gallery" title="Close gallery" />
                      <img class="fs-gal-main" src="" alt="" />
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
  
            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Desarrollado por <a href="https://jofret.com" target="_blank">JOfret</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>