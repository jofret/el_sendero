<!-- post widget -->
<div class="aside-widget">
  <div class="section-title">
    <h2 class="title">Últimas Publicaciones</h2>
  </div>

  @foreach($lastPosts as $lastPost)
  <!-- post -->
  <div class="post post-widget">
    <a class="post-img" href="blog-post.html"><img src="{{$lastPost->file}}" alt="{{$lastPost->name}}"></a>
    <div class="post-body">
      <div class="post-category">
        <a href="{{route('category' , $category->slug)}}">{{$lastPost->category->name}}</a>
      </div>
      <h3 class="post-title"><a href="blog-post.html">{{$lastPost->name}}</a></h3>
    </div>
  </div>
  <!-- /post -->
  @endforeach

</div>
<!-- /post widget -->