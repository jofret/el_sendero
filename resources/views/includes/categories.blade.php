
<div class="sidebar-box ftco-animate">
  <div class="categories">
    <h3>Categories</h3>
    @foreach($categories as $category)
    <li><a href="{{route('products' , $category->slug)}}#acuario-nautilos">{{$category->name}} <span>({{ $category->posts->count() }})</span></a></li>
    @endforeach
  </div>
</div>