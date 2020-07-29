@extends('layouts.post')
@section('title')
{{ $post->name }}
@endsection
@section('facebookgraph')
<!-- You can use open graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
      <meta property="og:url"           content="{{asset('chicotecas/'.$post->slug)}}" />
      <meta property="og:type"          content="website" />
      <meta property="og:title"         content="{{ $post->name }}" />
      <meta property="og:description"   content="{{ $post->excerpt }}" />
      <meta property="og:image"         content="{{ $post->file }}" />
@endsection

@section('content')
    <main>
      @include('includes.top_post')
      <!--================Blog Area =================-->
      <section class="blog_area single-post-area section-padding">
         <div class="container">
            <div class="row">
               <div class="col-lg-8 posts-list">
                  <div class="single-post">
                     <div class="feature-img" id="{{ $post->category->slug}}">
                        <img class="img-fluid" src="{{$post->file}}" alt="{{$post->name}}">
                     </div>
                     <div class="blog_details">
                        <ul class="blog-info-link mt-3 mb-4">
                           <li><a href="#"><i class="fa fa-user"></i> {{ $post->user->name }}</a></li>
                           <li>
                                <i class="lni lni-tag"></i>
                                    @foreach($post->tags as $tag)
                                        <a href="{{ route('tag', $tag->slug) }}">{{$tag->name}}</a>
                                    @endforeach
                                
                           </li>
                        </ul>
                        <h2>{{$post->name}}
                        </h2>
                        <p><i class="lni lni-alarm-clock"></i> {{ \Carbon\Carbon::parse($post->created_at)->format('M d Y')}}</p>
                        {!!$post->body!!}
                     </div>
                  </div>
                  <div class="navigation-top">
                     <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                           people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                           <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class="social-icons">
                           <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                        </ul>
                     </div>
                  </div>
                  <div class="blog-author">
                     <div class="media align-items-center">
                        <img src="assets/img/blog/author.png" alt="">
                        <div class="media-body">
                           <p>{{$post->excerpt}}</p>
                        </div>
                     </div>
                  </div>
               </div>

               <!--aqui left-->
                @include('includes.left_posts')
               <!--end aqui left-->

            </div>
         </div>
      </section>
      <!--================ Blog Area end =================-->

   </main>

@endsection