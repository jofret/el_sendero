@extends('layouts.acuarius')
@section('content')
<div id="nautilus"></div>
<section class="ftco-section goto-here" style="background:rgb(255,255,250)">
      <div class="container pb-5" >
        <div class="row justify-content-center">
              <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Instalaciones</span>
                <h2 class="mb-2 titules"><img src="{{asset('assets/images/LOGO ACUARIO3.png')}}"></a></h2>
              </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets/images/instalaciones_1.jpg')}}" data-url="{{asset('assets/images/instalaciones_1.jpg')}}" class="ion-ios-link img fs-gal" />
                        </div>
                        <div class="text">
                            <h3 class="mb-0"><a href=""></a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets/images/instalaciones_2.jpg')}}" data-url="{{asset('assets/images/instalaciones_2.jpg')}}" class="ion-ios-link img fs-gal" />
                        </div>
                        <div class="text">
                            <h3 class="mb-0"><a href=""></a></h3>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center">
                            <img src="{{asset('assets/images/instalaciones_3.jpg')}}" data-url="{{asset('assets/images/instalaciones_3.jpg')}}" class="ion-ios-link img fs-gal" />
                        </div>
                        <div class="text">
                            <h3 class="mb-0"><a href=""></a></h3>
                        </div>
                    </div>
                </div>
                
                <div class="fs-gal-view">
                    <h1></h1>
                    <img class="fs-gal-prev fs-gal-nav" src="{{asset('assets/img/prev.svg')}}" alt="Previous picture" title="Previous picture" />
                    <img class="fs-gal-next fs-gal-nav" src="{{asset('assets/img/next.svg')}}" alt="Next picture" title="Next picture" />
                    <img class="fs-gal-close" src="{{asset('assets/img/close.svg')}}" alt="Close gallery" title="Close gallery" />
                    <img class="fs-gal-main" src="" alt="" />
                </div>
            </div>
      </div>
    </section>
@endsection