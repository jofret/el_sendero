<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Precategory;
use App\Tag;

class PageController extends Controller
{

    public function inicio(){

        $categories = Category::orderBy('id', 'DESC')->get();


        return view('web.inicio', compact('categories'));
    }

    public function formularioentradas(){

        return view('web.fomularioEntradas');
    }
    
    public function products($slug){

        $category = Category::where('slug', $slug)->pluck('id')->first();
        $categoryName = Category::where('slug', $slug)->pluck('name')->first();


        $products = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(9);;


        $categories = Category::all();

        $plans = Tag::all(); 

        return view('web.products', compact('category','categoryName','categories','products','plans'));
    }



    public function product($slug){
        $product = Post::where('slug', $slug)->first();

        $category = Post::where('slug', $slug)->pluck('category_id')->first();

        $categories = Category::all();

        $plans = Tag::all(); 

        $excepto = Post::where('slug',$slug)->pluck('id')->first();

        $productsRelations = Post::orderBy('category_id', 'DESC')->where('category_id', $category)
                ->orderBy('id','DESC')->where('status','PUBLISHED')->where('id', '<>', $excepto)->get();

        return view('web.product', compact('product','category','categories','plans','productsRelations','excepto'));
    }

   
    
    public function tag($slug){ 
        
        $products = Post::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(9);

        $category = Category::where('slug', $slug)->pluck('id')->first();

        $categories = Category::all();

        $plans = Tag::all();

        return view('web.products', compact('products','category','categories','plans'));
    }


   
     public function admin(){
        return view('admin.index');
    }
  
}
