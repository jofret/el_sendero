<footer>
    <!--? Footer Start-->
    <div class="footer-area section-bg" data-background="{{asset('assets/img/gallery/footer_bg.jpg')}}">
        <div class="container">
            <div class="footer-top footer-padding">
                <div class="row d-flex justify-content-between">
                    <div class="col-xl-3 col-lg-4 col-md-5 col-sm-8">
                        <div class="single-footer-caption mb-50">
                            <!-- logo -->
                            <div class="footer-logo" style="text-transform: uppercase">
                                <div class="footer-tittle">
                                    <h4>Outsoursing Consulting Business </h4>
                                </div>
                            </div>
                            <div class="footer-tittle">
                                <div class="footer-pera">
                                    <p class="info1">Somos una firma consultora especializada, con amplia experiencia en asesoría tributaria interna y externa de empresas vinculadas al sector; Industrial, Agroindustrial, Pesca, Minería, Aeronáutica Civil, Comercial y de Servicios.</p>
                                </div>
                            </div>
                            <div class="footer-number">
                                <h4><span>+51 </span>948 428 132</h4>
                                <p>consultas@problemas-con-sunat.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Navegación </h4>
                                <ul>
                                    <li><a class="js-scroll-trigger" href="#inicio">Inicio</a></li>
                                    <li><a class="js-scroll-trigger" href="{{url('/')}}#quehacemos">¿Qué Hacemos?</a></li>
                                    <li><a class="js-scroll-trigger" href="#contactenos">Contáctenos</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-2 col-lg-2 col-md-3 col-sm-5">
                        <div class="single-footer-caption mb-50">
                            <div class="footer-tittle">
                                <h4>Publicaciones</h4>
                                <ul>
                                    @foreach($categories as $category)
                                     <li>
                                        <a href="{{ route('category', $category->slug) }}" class="d-flex">
                                            {{ $category->name }}
                                        </a>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="row d-flex justify-content-between align-items-center">
                    <div class="col-xl-9 col-lg-8">
                        <div class="footer-copy-right">
                            <p>
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> Derechos Reservados | Desarrollado por <a href="https://jofret.com" target="_blank">Jofret</a>

                        </div>
                    </div>
                    <div class="col-xl-3 col-lg-4">
                        <!-- Footer Social -->
                        <div class="footer-social f-right">
                            <a href="#"><i class="fab fa-facebook-f"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End-->
</footer>
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>