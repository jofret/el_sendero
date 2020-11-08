@extends('layouts.acuarius')
@section('content')
<div id="nautilus"></div>
<section class="ftco-section goto-here" style="background:rgb(255,255,250)">
      <div class="container pb-5" >
        <div class="row justify-content-center">
              <div class="col-md-12 heading-section text-center ftco-animate mb-5">
                <span class="subheading">Exhibiciones</span>
                <h2 class="mb-2 titules"><img src="{{asset('assets/images/LOGO ACUARIO3.png')}}"></a></h2>
              </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center">
                            <video width="100%"  autoplay muted loop style="padding: 0 5%">
                           <source src="{{asset('assets/video/8.mp4')}}" type="video/mp4">
                        </video>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center">
                            <video width="100%"  autoplay muted loop style="padding: 0 5%">
                           <source  src="{{asset('assets/video/9.mp4')}}" type="video/mp4">
                        </video>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="property-wrap ftco-animate">
                        <div class="img d-flex align-items-center justify-content-center">
                            <video width="100%"  autoplay muted loop style="padding: 0 5%">
                           <source  src="{{asset('assets/video/10.mp4')}}" type="video/mp4">
                        </video>
                        </div>
                    </div>
                </div>
            </div>
      </div>
    </section>
@endsection