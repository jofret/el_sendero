@extends('layouts.acuarius')
@section('content')
<div id="ver-imagenes-nautilus"></div>
<section class="ftco-section goto-here">
    	<div class="container">
    		<div class="row justify-content-center">
	          <div class="col-md-12 heading-section text-center ftco-animate mb-5">
	          	<span class="subheading">Galería</span>
	            <h2 class="mb-2">Imágenes Nautilus</h2>
	          </div>
	        </div>
	        <div class="row">
	        	@foreach($imagesGalery as $imageGalery)
	        	<div class="col-md-4">
	        		<div class="property-wrap ftco-animate">
	        			<div class="img d-flex align-items-center justify-content-center">
	        				<img src="{{$imageGalery->file}}" data-url="{{$imageGalery->file}}" 
  class="ion-ios-link img fs-gal" />

	        				<div class="list-agent d-flex align-items-center">
	        					<a href="#" class="agent-info d-flex align-items-center">
	        						<h3 class="mb-0 ml-2">Ben Ford</h3>
	        					</a>
	        					<div class="tooltip-wrap d-flex">
	        						<a href="#" class="icon-2 d-flex align-items-center justify-content-center" data-toggle="tooltip" data-placement="top" title="Bookmark">
	        							<span class="ion-ios-heart"><i class="sr-only">Bookmark</i></span>
	        						</a>
	        						
	        					</div>
	        				</div>
	        			</div>
	        			<div class="text">
	        				<h3 class="mb-0"><a href="properties-single.html">{{$imageGalery->name}}</a></h3>
	        			</div>
	        		</div>
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
    </section>
@endsection