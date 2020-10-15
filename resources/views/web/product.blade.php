@extends('layouts.catalogo')

@section('content')
    <section class="ftco-section ftco-degree-bg mt-5">
      <div class="container">
        <div class="row">
          <div class="col-md-8 ftco-animate">
              <section class="ftco-section">
                <div class="container">
                  <div class="row d-flex">
                    <div class="col-md-5">
                      <img src="{{$product->file}}" alt="" class="img-fluid">
                    </div>
                    <div class="col-md-7">
                      <h2 class="mb-3 pt-4">{{$product->name}}</h2>
                      <p>S/ {{$product->pricing}}</p>
                      <div>
                        <p>Etiquetas:</p>
                        <div class="tagcloud">
                          @foreach($product->tags as $tag)
                          <a href="{{ route('tag', $tag->slug)}}#acuario-nautilos" class="tag-cloud-link">{{$tag->name}}</a>
                          @endforeach
                          
                        </div>
                      </div>
                    </div>
                    {!! $product->body !!}

                  </div>
                </div>
              </section>  
              <div class="site-section block-3 site-blocks-2">
              <div class="container">
                <div class="row justify-content-center">
                  <div class="col-md-7 site-section-heading text-center pt-4">
                    <h2>Relacionados a esta categoría</h2>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12 block-3">
                    <div class="nonloop-block-3 carousel-testimony owl-carousel">
                      @foreach($productsRelations as $productRelation)
                      <div class="item">
                        <div class="item-entry">
                           <a href="{{route('product',$productRelation->slug)}}#acuario-nautilos" class="product-item md-height bg-gray d-block">
                              <img src="{{$productRelation->file}}" alt="{{$productRelation->name}}" class="img-fluid" style="padding:15%">
                           </a>
                            <div class="star-rating">
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                              <span class="icon-star2 text-warning"></span>
                            </div>
                        </div>
                          <h2 class="item-title"><a href="{{route('product',$productRelation->slug)}}#acuario-nautilos">{{$productRelation->name}}</a></h2>
                          <strong class="item-price">S/ {{$productRelation->pricing}}</strong>
                      </div>
                      @endforeach
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> <!-- .col-md-8 -->
          
          @include('includes.menulateralright')

        </div>
      </div>
    </section> <!-- .section -->


    
@endsection

