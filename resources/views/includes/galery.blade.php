  <!-- galery widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">Galería</h2>
    </div>
    <div class="galery-widget">
      <ul class="gallery">
        @foreach($images as $image)
        <li><a href="{{$image->file}}"><img src="{{$image->file2}}" alt="{{$image->name}}" style="width:150px; height: 90px"></a></li>
        @endforeach
      </ul>
      <a href="{{route('galery')}}" class="primary-button" type="button">Ver galería</a>
    </div>
  </div>
  <!-- /galery widget -->