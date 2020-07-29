<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Tag;

class PageController extends Controller
{
    public function inicio(){
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(2);
        $categories = Category::orderBy('id', 'DESC')->paginate();
        return view('web.inicio', compact('posts','categories'));
    }

    public function publicaciones(){
    	$posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        $recientesPosts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(6);
        $categories = Category::orderBy('id', 'DESC')->paginate();
        $tags = Tag::orderBy('id', 'DESC')->paginate();
    	return view('web.posts', compact('posts','categories','tags','recientesPosts'));

    }

    public function category($slug){
        
        $category = Category::where('slug', $slug)->pluck('id')->first();
        $posts    = Post::where('category_id', $category)
                ->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        $recientesPosts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(6);

        $categories = Category::orderBy('id', 'DESC')->paginate();
        $tags = Tag::orderBy('id', 'DESC')->paginate();
        return view('web.posts', compact('category','categories','tags','posts','recientesPosts'));

    }

    public function tag($slug){
        $recientesPosts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(6);
        $posts  = Post::whereHas('tags', function($query) use ($slug){
            $query->where('slug', $slug);
        

        })->orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        $categories = Category::orderBy('id', 'DESC')->paginate();
        $tags = Tag::orderBy('id', 'DESC')->paginate();

        return view('web.posts', compact('posts','categories','tags','recientesPosts'));

    }

    public function post($slug){
        $categories = Category::orderBy('id', 'DESC')->paginate();
        $tags = Tag::orderBy('id', 'DESC')->paginate();
    	$post = Post::where('slug', $slug )->first();
        $posts = Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(3);
        $recientesPosts=Post::orderBy('id','DESC')->where('status','PUBLISHED')->paginate(6);

    	return view('web.post', compact('categories','tags','post','posts','recientesPosts'));
    }
}
