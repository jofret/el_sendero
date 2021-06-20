<!-- category widget -->
<div class="aside-widget">
<div class="section-title">
  <h2 class="title">Categorías</h2>
</div>
<div class="category-widget">
  <ul>
    @foreach($categories as $category)
    <li><a href="{{route('category' , $category->slug)}}">{{$category->name}} <span>{{ $category->posts->count() }}</span></a></li>
    @endforeach
  </ul>
</div>
</div>
<!-- /category widget -->