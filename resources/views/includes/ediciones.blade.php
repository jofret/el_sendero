<!-- category widget -->
    <div class="aside-widget">
      <div class="section-title">
        <h2 class="title">Ediciones</h2>
      </div>
      <div class="category-widget">
        <ul>
          @foreach($ediciones as $edicion)
          <li><a href="{{route('trailercategory', $edicion->slug)}}">{{$edicion->name}} <span>
            
            </span></a></li>
          @endforeach
        </ul>
      </div>
    </div>
    <!-- /category widget -->