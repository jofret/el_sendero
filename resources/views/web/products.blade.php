@extends('layouts.catalogo')
@section('content')
<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
              <section class="ftco-section">
                <div class="container">
                  <div>
                    <h5>{{$categoryName}}</h5>
                    <hr>
                  </div>
                  <div class="row d-flex">
                    @foreach($products as $product)
                    <div class="col-md-4 d-flex ftco-animate" id="{{$product->category->slug}}">
                      <div class="blog-entry justify-content-end">
                        <div class="text">
                          <a href="{{route('product' , $product->slug)}}#acuario-nautilos" 
                            class="block-20 img">
                            <img src="{{$product->file}}" alt="{{$product->name}}" class="img-fluid" style="padding:5%">
                          </a>
                          <h3 class="heading"><a href="{{route('product' , $product->slug)}}#acuario-nautilos">{{$product->name}}</a></h3>
                        </div>
                      </div>
                    </div>
                    @endforeach
                  </div>
                </div>
              </section>  
          </div> <!-- .col-md-8 -->
          
          @include('includes.menulateralright')

        </div>
      </div>
    </section> <!-- .section -->
@endsection
