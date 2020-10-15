@extends('layouts.acuarius')

@section('content')
<section class="ftco-section testimony-section bg-light">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ftco-animate">
            <span class="subheading">Catálogo</span>
            <h2 class="mb-3 titules">Nuestros Productos</h2>
          </div>
        </div>
        <div class="row ftco-animate">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              @foreach($categories as $category)
              <div class="item">
                <div class="testimony-wrap py-4">
                  <div>
                    <a href="{{route('products' , $category->slug)}}"><img src="{{$category->file}}" class="{{$category->name}}"></a>
                  </div>
                  <div class="text">
                    <div class="d-flex align-items-center">
                      <div class="pl-3">
                        <p class="name">{{$category->name}}</p>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
    </section>
@endsection