<!doctype html>
<html class="" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Business HTML-5 Template </title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="manifest" href="site.webmanifest">
	<link rel="shortcut icon" type="image/x-icon" href="{{asset('assets/img/favicon.ico')}}">

	<!-- CSS here -->
    @include('includes.links')
</head>

<body class="body-bg">
@include('includes.header')
<main>
    <!-- slider Area Start-->
    <div class="slider-area ">
        <div class="slider-active">
            
            
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Nuestra Especialidad</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" >Expertos en Contingencias Tributarias</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">Somos una firma consultora especializada, con amplia experiencia en asesoría tributaria interna y externa de empresas vinculadas al sector; Industrial, Agroindustrial, Pesca, Minería, Aeronáutica Civil, Comercial y de Servicios.</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="industries.html" class="btn hero-btn">Consulta Gratuita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>
            <!-- Single Slider -->
            <div class="single-slider slider-height d-flex align-items-center">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7 col-md-8">
                            <div class="hero__caption">
                                <span data-animation="fadeInLeft" data-delay=".1s">Somos Expertos</span>
                                <h1 data-animation="fadeInLeft" data-delay=".5s" >¿Problemas con Sunat?</h1>
                                <p data-animation="fadeInLeft" data-delay=".9s">Soluciónamos Temas de Embargos de Cuentas, Cobranzas Coactivas, Auditorias. Tenemos el Conocimiento y la Experiencia Somos un aliado que te ayudará adefenderte ante SUNAT</p>
                                <!-- Hero-btn -->
                                <div class="hero__btn" data-animation="fadeInLeft" data-delay="1.1s">
                                    <a href="industries.html" class="btn hero-btn">Consulta Gratuita</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>          
            </div>

        </div>
    </div>
    <!-- slider Area End-->

    <div class="categories-area section-padding30">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <!-- Section Tittle -->
                    <div class="section-tittle mb-70">
                        <span>Nosotros</span>
                        <h2>¿Qué Hacemos?</h2>
                    </div>
                </div>
            </div>
            <div>
                <div class="my_services">
                    <p>
                        Todos nuestros servicios los brindamos dentro del marco normativo que establece el TEXTO UNICO
                        ORDENADO DEL CODIGO TRIBUTARIO, NUEVO TUO D.S. 133-2013 EF. Desarrollándolo a cabalidad y con
                        plena observación, aplicación y en cumplimiento del mismo, contamos con sólidos conocimientos sobre la
                        Interpretación y Aplicación del NUEVO TUO del Código Tributario DS. 133-2013-EF, TUO.
                        Tenemos amplia experiencia en Fiscalización PRE-SUNAT, Fiscalización Tributaria SUNAT.
                        Con amplia experiencia en Auditorías Tributarias Internas y Externas: 
                    </p>
                    <ul>
                        <li>Levantamiento de sanciones efectuadas por la Administración Tributaria - SUNAT / SUNAD</li>
                        <li>Cierre Temporal del Establecimiento (3,6 y 10 días).</li>
                        <li>Comiso o Internamiento Temporal de (30 días).</li>
                        <li>Comiso o Incautación de Bienes (15 días).</li>
                        <li>Contingencias Tributarias: Cobranzas Coactivas, Ejecuciones Coactivas, Embargos Financieros en forma
                        de retención, Medidas Cautelares y otros.</li>
                        <li>Contingencias Tributarias: Reclamaciones, Apelaciones ante el tribunal fiscal, la administración Tributaria y
                        Aduanera / SUNAT - SUNAD</li>
                        <li>Acogimiento a Fraccionamientos Tributarios.</li>
                        <li>Actualización, Regularización de Impuestos y/o Fraccionamientos Tributarios.</li>
                        <li>Acogimiento a Beneficios Tributarios.</li>
                        <li>Incorporación, Formalización y Acogimiento a Leyes de Promoción de las Micro y Pequeñas
                        Empresas MYPES – PYMES</li>
                        <li>Planificación Tributaria, Determinación, Cálculo y Resultado de Impuestos Mensuales.</li>
                        <li>Aprovechamiento de las Declaraciones Renta por Coeficiente Mensual o Régimen Tributario.</li>
                        <li>Asistencia en Fiscalización Tributaria: Cartas Inductivas, Requerimientos, Verificaciones, Fiscalización -
                        Parcial y/o Definitiva.</li>
                        <li>Servicio de Asesoramiento, en el Proceso, Cierre y Resultado de Fiscalización Tributaria.</li>
                        <li>Actualización y Regularización de los Registros Electrónicos PLE</li>
                        <li>Devolución del Impuesto a la Renta Trabajo 4ta y 5ta Categoría por pago indebido o exceso.</li>
                        <li>Devolución de las Detracciones.</li>
                        <li>Cierre y Determinación del Impuesto a la Renta Anual 2019 y ejercicios anteriores (Elaboración Balances)</li> 
                    </ul>
                </div>
            </div>
        </div>
    </div>

    @include('includes.form')

    <!--? Testimonial Start -->
    <div class="testimonial-area testimonial-padding" data-background="{{asset('assets/img/gallery/section_bg04.jpg')}}">
        <div class="container ">
            <div class="row d-flex justify-content-center">
                <div class="col-xl-10 col-lg-10 col-md-9">
                    <div class="h1-testimonial-active">
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="67px" height="49px">
                                    <path fill-rule="evenodd"  fill="rgb(240, 78, 60)"
                                    d="M57.053,48.209 L42.790,48.209 L52.299,29.242 L38.036,29.242 L38.036,0.790 L66.562,0.790 L66.562,29.242 L57.053,48.209 ZM4.755,48.209 L14.263,29.242 L0.000,29.242 L0.000,0.790 L28.527,0.790 L28.527,29.242 L19.018,48.209 L4.755,48.209 Z"/>
                                    </svg>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{asset('assets/img/gallery/Homepage_testi.png')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Single Testimonial -->
                        <div class="single-testimonial text-center">
                            <!-- Testimonial Content -->
                            <div class="testimonial-caption ">
                                <div class="testimonial-top-cap">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="67px" height="49px">
                                    <path fill-rule="evenodd"  fill="rgb(240, 78, 60)"
                                    d="M57.053,48.209 L42.790,48.209 L52.299,29.242 L38.036,29.242 L38.036,0.790 L66.562,0.790 L66.562,29.242 L57.053,48.209 ZM4.755,48.209 L14.263,29.242 L0.000,29.242 L0.000,0.790 L28.527,0.790 L28.527,29.242 L19.018,48.209 L4.755,48.209 Z"/>
                                    </svg>
                                    <p>Consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Quis ipsum suspendisse ultrices gravida. Risus commodo viverra maecenas accumsan lacus vel facilisis por incididunt ut labore et dolore mas. </p>
                                </div>
                                <!-- founder -->
                                <div class="testimonial-founder d-flex align-items-center justify-content-center">
                                    <div class="founder-img">
                                        <img src="{{asset('assets/img/gallery/Homepage_testi.png')}}" alt="">
                                    </div>
                                    <div class="founder-text">
                                        <span>Jessya Inn</span>
                                        <p>Chif Photographer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->
    
    <!-- Blog Area Start -->
    @yield('content')
    <!-- Blog Area End -->
    <!-- Brand Area Start -->
    <div class="brand-area pb-140">
        <div class="container">
            <div class="brand-active brand-border pb-40">
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand1.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand2.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand3.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand4.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand2.png')}}" alt="">
                </div>
                <div class="single-brand">
                    <img src="{{asset('assets/img/gallery/brand5.png')}}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Brand Area End -->
</main>

    @include('includes.footer')


    <!-- JS here -->
    @include('includes.js')
        
    </body>
</html>