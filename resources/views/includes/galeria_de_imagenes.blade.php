<div class="row">
  @foreach($images as $image)
  <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
    <div>
        <img src="{{$image->file}}" data-url="{{$image->file}}" class="fs-gal img-fluid" alt="{{$image->name}}" style="width:150px; height: 90px">
    </div>
  </div>
  @endforeach
  <div class="fs-gal-view">
      <h1></h1>
      <img class="fs-gal-prev fs-gal-nav" src="{{asset('assets/img/prev.svg')}}" alt="Previous picture" title="Previous picture" />
      <img class="fs-gal-next fs-gal-nav" src="{{asset('assets/img/next.svg')}}" alt="Next picture" title="Next picture" />
      <img class="fs-gal-close" src="{{asset('assets/img/close.svg')}}" alt="Close gallery" title="Close gallery" />
      <img class="fs-gal-main" src=""/>
  </div>
</div>