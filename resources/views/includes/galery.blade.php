  <!-- galery widget -->
  <div class="aside-widget">
    <div class="section-title">
      <h2 class="title">Galería</h2>
    </div>
    <div class="galery-widget">
      <ul>
        @foreach($images as $image)
        <li><a href="#"><img src="{{$image->file}}" alt=""></a></li>
        @endforeach
      </ul>
    </div>
  </div>
  <!-- /galery widget -->