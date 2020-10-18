@extends('layouts.acuarius')
@section('content')
<div id="nautilus"></div>
<section class="ftco-section goto-here" style="background:rgb(255,255,250)">
      <div class="container pb-5" >
        <div class="row justify-content-center">
              <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Nosotros</span>
                <h2 class="mb-2 titules"><img src="{{asset('assets/images/LOGO ACUARIO3.png')}}"></a></h2>
              </div>
            </div>

            <div class="row">
                

                <div class="col-lg-6">
                    <div>
                        <!-- <h2>DESCUBRE EL ACUARIO</h2> -->
                        
                        <p>Nautilus se formó en el año 1992. El Sr. Elio
							Monteza recuerda los inicios como el hobbie
							desde que era un adolescente; sin tener
							precedentes en el Perú de empresas
							dedicadas exclusivamente a los peces
							ornamentales y con el apoyo de sus padres,
							hermanas, su socio el Sr. Luis Armijo y su
							novia que actualmente es su esposa; decide
							emprender una carrera en acuariofilia. Luego
							de cursar la facultad de Acuicultura en la
							Universidad Villarreal, comienza múltiples
							viajes al extranjero con el objetivo de
							aprender, descubrir y tener conocimientos que puedan ser aplicados en el Perú.<br><br>

                            En el proceso de aprendizaje y crecimiento hubo muchos retos y dificultades debido al
							contexto político y económico del país; sin embargo, el Sr. Monteza recuerda de manera
							satisfactoria las experiencias vividas.
							Actualmente, Nautilus es una empresa dedicada a fomentar la cultura, educación y
							respeto de las múltiples biotopos acuáticos. </p>

                    </div>
                </div>

                <div class="col-lg-6">
                    <div style="position:relative;">
                        <video width="100%"  autoplay muted loop style="padding: 0 5%">
                           <source  src="{{asset('assets/video/video_para_web.mp4')}}" type="video/mp4">
                        </video>
                        <img style="position:absolute; left:0" src="{{asset('assets/images/MantaRay-1x.png')}}" class="img-fluid">
                    </div>
                </div>

                <div class="col-lg-12">
                    <div>
                        <h2>Propósito</h2>
                        
                        <p>En Nautilus trabajamos esforzadamente para brindar una experiencia única en sintonía
						con la naturaleza acuática. Con el objetivo de que cada visitante adquiera conocimientos y
						desarrolle conductas que vayan de la mano con el cuidado del medio ambiente y
						preservación de nuestra biodiversidad acuática. Formamos parte de una corriente de
						acuarios públicos que están comprometidos con la conservación y reproducción de
						especies.
						En Nautilus creemos que enseñar a cuidar el medio ambiente es enseñar a valorar la vida.
						 </p>

                    </div>
                </div>
                
            </div>
      </div>

    </section>
@endsection