@extends('layouts.post')

	@section('title')
	Problemas con la sunat
	@endsection

    @section('nav')
    <li><a class="js-scroll-trigger" href="{{url('/')}}#quehacemos">¿Qué Hacemos?</a></li>
    @endsection
 
@section('content')

				

    <main>
        <!--top-post-->
        @include('includes.top_post')
        <!--end top post-->


        <!--================Blog Area =================-->
        <section class="blog_area section-padding">
            <div class="container">
                <div class="row">
                    <!-- Single Blog Area -->
                
                    <div class="col-lg-8 mb-5 mb-lg-0">
                        <div class="blog_left_sidebar">
                            @foreach($posts as $post)
                            <article class="blog_item">
                                <div class="blog_item_img">
                                    <img class="card-img rounded-0" src="{{ $post->file }}" alt="{{ $post->name }}">
                                    <a href="{{ route('post', $post->slug) }}" class="blog_item_date">
                                        <h3>15</h3>
                                        <p>Jan</p>
                                    </a>
                                </div>

                                <div class="blog_details">
                                    <a class="d-inline-block" href="{{ route('post', $post->slug) }}">
                                        <h2>{{ $post->name }}</h2>
                                    </a>
                                    <p>{{ $post->excerpt }}</p>
                                    <ul class="blog-info-link">
                                        <li><a href="#"><i class="fa fa-user"></i> {{ $post->user->name }}</a></li>
                                        <li>
                                            <i class="lni lni-tag"></i>
                                                @foreach($post->tags as $tag)
                                                    <a href="{{ route('tag', $tag->slug) }}">{{$tag->name}}</a>
                                                @endforeach
                                            
                                        </li>
                                    </ul>
                                </div>
                            </article>
                            @endforeach
                            <div>{{ $posts->render() }}</div>
                        </div>
                    </div>
                    <!--aqui left-->
                    @include('includes.left_posts')
                    <!--end aqui left-->
                </div>
            </div>
        </section>
        <!--================Blog Area =================-->
    </main>



@endsection