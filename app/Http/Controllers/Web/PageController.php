<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Precategory;
use App\Tag;
use App\Image;

class PageController extends Controller
{

    public function inicio(){

        $categories = Category::orderBy('id', 'DESC')->get();
        $images = Image::orderBy('id', 'DESC')->paginate(6);
        return view('web.inicio', compact('categories','images'));
    }

    public function formularioentradas(){

        $images = Image::orderBy('id', 'DESC')->paginate(6);
        return view('web.fomularioEntradas', compact('images'));
    }


    public function products($slug){

        $category = Category::where('slug', $slug)->pluck('id')->first();
        $categoryName = Category::where('slug', $slug)->pluck('name')->first();


        $products = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(9);


        $categories = Category::all();

        $plans = Tag::all(); 

        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.products', compact('category','categoryName','categories','products','plans','images'));
    }



    public function product($slug){
        $product = Post::where('slug', $slug)->first();

        $category = Post::where('slug', $slug)->pluck('category_id')->first();

        $categories = Category::all();

        $plans = Tag::all(); 

        $excepto = Post::where('slug',$slug)->pluck('id')->first();

        $productsRelations = Post::orderBy('category_id', 'DESC')->where('category_id', $category)
                ->orderBy('id','DESC')->where('status','PUBLISHED')->where('id', '<>', $excepto)->get();

        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.product', compact('product','category','categories','plans','productsRelations','excepto','images'));
    }



   
    
    public function tag($slug){ 
        
        $products = Post::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(9);

        $category = Category::where('slug', $slug)->pluck('id')->first();

        $categories = Category::all();

        $plans = Tag::all();
        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.products', compact('products','category','categories','plans','images'));
    }


    /******imagenes*******/

    public function galery(){

        $imagesGalery = Image::orderBy('id', 'DESC')->paginate(9);
        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.galery', compact('images','imagesGalery'));
    }

    public function nosotros(){
        $images = Image::orderBy('id', 'DESC')->paginate(6);
        return view('simpleRoutes.nosotros',compact('images'));
    }

    public function instalaciones(){

        $images = Image::orderBy('id', 'DESC')->paginate(6);
        return view('simpleRoutes.instalaciones', compact('images'));
    }

    public function exhibiciones(){

        $images = Image::orderBy('id', 'DESC')->paginate(6);
        return view('simpleRoutes.exhibiciones', compact('images'));
    }
    

   
     public function admin(){
        return view('admin.index');
    }
  
}
