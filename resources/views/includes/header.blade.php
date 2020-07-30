<!--? Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src="{{asset('assets/img/logo/logo_my.png')}}" alt="">
            </div>
        </div>
    </div>
</div>
<header>
    <!-- Header Start -->
    <div class="header-area" id="inicio">
        <div class="main-header ">
            <div class="header-top d-none d-lg-block">
                <div class="container">
                    <div class="col-xl-12">
                        <div class="row d-flex justify-content-between align-items-center">
                            <div class="header-info-left">
                                <ul>     
                                    <li><i class="far fa-clock"></i> Lun - Sab: 9.00 am - 6.00 pm</li>
                                    <li>Dom:  Cerrado</li>
                                </ul>
                            </div>
                            <div class="header-info-right">
                                <ul class="header-social">    
                                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="header-bottom  header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo d-none d-sm-block">
                                <a href="{{url('/')}}"><img src="{{asset('assets/img/logo/logo_my.png')}}" alt=""></a>
                            </div>

                            <div class="logo d-block d-sm-none">
                                <a href="{{url('/')}}"><img src="{{asset('assets/img/logo/logo_movil.png')}}" alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10">
                            <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                <!-- Main-menu -->
                                <div class="main-menu d-none d-lg-block">
                                    <nav> 
                                        <ul id="navigation">
                                            <li><a class="js-scroll-trigger" href="#inicio">Inicio</a></li>  
                                            @yield('nav') 
                                            <li><a class="js-scroll-trigger" href="#contactenos">Contáctenos</a></li>
                                            <li><a href="{{url('publicaciones')}}">Publicaciones</a>
                                                <ul class="submenu">
                                                    @foreach($categories as $category)
                                                     <li>
                                                        <a href="{{ route('category', $category->slug) }}" class="d-flex">
                                                            {{ $category->name }}
                                                        </a>
                                                    </li>
                                                    @endforeach
                                                </ul>
                                            </li>
                                        </ul>
                                    </nav>
                                </div>
                            </div>
                        </div> 
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header End -->
</header>