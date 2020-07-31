<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <div class="single-widget-area">
            <!-- Post Author Widget -->
            <div class="post-author-widget">
                <!-- Thumbnail -->
                <div class="post-author-avatar">
                    <img src="{{asset('assets/img/hero/julio-criollo-consultores.jpg')}}" alt="julio criollo valdiviezo">
                </div>
                <!-- Author Content -->
                <div class="post-author-content">
                    <h5>Julio Criollo Valdiviezo</h5>
                    <span>OUTSOURSING CONSULTING BUSINESS</span>
                    <p><i class="lni lni-whatsapp"></i> +51 948 428 132</p>
                </div>
                <!-- Social Info -->
                <div class="author-social-info">
                    <a href="#"><i class="zmdi zmdi-facebook"></i></a>
                </div>
            </div>
        </div>
        <!-- <aside class="single_sidebar_widget search_widget">
            <form action="#">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder='Search Keyword'
                            onfocus="this.placeholder = ''"
                            onblur="this.placeholder = 'Search Keyword'">
                        <div class="input-group-append">
                            <button class="btns" type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                    type="submit">Search</button>
            </form>
        </aside>
 -->
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Category</h4>
            <ul class="list cat-list">
                @foreach($categories as $category)
                 <li>
                    <a href="{{ route('category', $category->slug) }}" class="d-flex">
                        <p>{{ $category->name }}</p>
                        <p>({{ $category->posts->count() }})</p>
                    </a>
                </li>
                @endforeach
            </ul>
        </aside>

        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Recent Post</h3>
            @foreach($recientesPosts as $recientePost)
            <div class="media post_item">
                <img src="{{$recientePost->file}}" width="100px" height="70" alt="post">
                <div class="media-body">
                    <a href="{{ route('post', $recientePost->slug) }}">
                        <h3>{{$recientePost->name}}</h3>
                    </a>
                    <p>{{ \Carbon\Carbon::parse($recientePost->created_at)->format('M d Y')}}</p>
                </div>
            </div>
            @endforeach
        </aside>
        <aside class="single_sidebar_widget tag_cloud_widget">
            <h4 class="widget_title">Tag Clouds</h4>
            <ul class="list">
                @foreach($tags as $tag)
                <li>
                    <a href="{{ route('tag', $tag->slug) }}">{{ $tag->name }}</a>
                </li>
                @endforeach
            </ul>
        </aside>
    </div>
</div>