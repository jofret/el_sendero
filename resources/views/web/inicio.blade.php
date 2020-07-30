@extends('layouts.main_sunat')
@section('nav')
<li><a class="js-scroll-trigger" href="#quehacemos">¿Qué Hacemos?</a></li>
@endsection
@section('content')

	
    <!-- Our Blog Area End -->
    <div class="home-blog-area section-padding30">
        <div class="container">
            <!-- Section Tittle -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-tittle mb-100">
                        <span>Artículos más recientes</span>
                        <h2>Publicaciones</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <!-- Single Blog Area -->
                @foreach($posts as $post)
                <div class="col-xl-6 col-lg-6 col-md-6">
                    <div class="home-blog-single mb-30">
                        <div class="blog-img-cap">
                            <div class="blog-img">
                                <a href="{{route('post', $post->slug)}}#{{ $post->category->slug}}"><img src="{{ $post->file }}" alt="{{ $post->name }}"></a>
                                <ul>
                                    <li>Por {{ $post->user->name }}   -   {{ \Carbon\Carbon::parse($post->created_at)->format('M d Y')}}</li>
                                </ul>
                            </div>
                            <div class="blog-cap">
                                <h3><a href="{{route('post', $post->slug)}}">{{ $post->name }}</a></h3>
                                <p>{{ $post->excerpt }}</p>
                                <a href="{{route('post', $post->slug)}}" class="more-btn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
                <!--End Single Blog Area -->
            </div>
        </div>
    </div>


@endsection
