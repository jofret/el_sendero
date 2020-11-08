@extends('layouts.construct')

@section('content')
<div id="nautilus"></div>



    <!--Proyetos-->
    <div class="site-section">
      <div class="container">
        <div class="row mb-4">

          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Nuestros Proyectos</h2>
          </div>

        </div>

        <div class="row">
          @foreach($images as $image)
          <div class="col-md-6 mb-5 mb-lg-5 col-lg-4">
            <div class="project-item">

              <img src="{{$image->file}}" alt="Image" class="img-fluid">
              
              <div class="project-item-overlay">
                <a class="category" href="#">{{$image->name}}</a>
                <span class="plus">
                  <span class="icon-plus"></span>
                </span>

                <a href="#" class="project-title"><span>{{$image->name}}</span></a>
              </div>

            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div>
    <!--end proyectos-->


    <!--Blog-->
    <!-- <div class="site-section">
      <div class="container">
        <div class="row mb-4">

          <div class="col-md-4 mx-auto">
            <h2 class="line-bottom text-center">Our Blog</h2>
          </div>

        </div>

        <div class="row">
          @foreach($posts as $post)
          <div class="col-lg-4 col-md-6 mb-4">
            <div class="post-entry-1 h-100">
              <a href="single.html">
                <img src="{{$post->file}}" alt="Image"
                 class="img-fluid">
              </a>
              <div class="post-entry-1-contents">
                
                <h2><a href="single.html">{{$post->name}}</a></h2>
                <span class="meta d-inline-block mb-3">{{ \Carbon\Carbon::parse($post->created_at)->format('M d Y')}} <span class="mx-2">por</span> <a href="#">{{$post->user->name}}</a></span>
                <p>{{$post->excerpt}}</p>
              </div>
            </div>
          </div>
          @endforeach
        </div>
      </div>
    </div> -->
    <!--end Blog-->
@endsection



