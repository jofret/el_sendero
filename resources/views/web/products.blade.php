@extends('layouts.catalogo')
@section('content')
<section class="ftco-section ftco-degree-bg">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
              <section class="ftco-section">
                <div class="container">
                  <div class="row d-flex">
                    @foreach($products as $product)
                    <div class="col-md-4 d-flex ftco-animate">
                      <div class="blog-entry justify-content-end">
                        <div class="text">
                          <a href="{{route('product' , $product->slug)}}" class="block-20 img" style="background-image: url({{$product->file}});">
                          </a>
                          <h3 class="heading"><a href="#">{{$product->name}}</a></h3>
                          <!-- div class="meta mb-3">
                            <div><a href="#">October 17, 2019</a></div>
                            <div><a href="#">Admin</a></div>
                            <div><a href="#" class="meta-chat"><span class="icon-chat"></span> 3</a></div>
                          </div> -->
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
