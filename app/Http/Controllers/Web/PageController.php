<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Precategory;
use App\Tag;
use App\Image;
use App\Video;
use App\Customer;

class PageController extends Controller
{

    public function inicio(){
        //aqui  Publicaciones
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(4);

        $categories = Category::all();

        $plans = Tag::all(); 

        // $projects = Post::where('category_id', '>', 1)
        //     ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

        $images = Image::orderBy('id', 'DESC')->paginate(6);
        
        $videos = Video::orderBy('id', 'DESC')->paginate(6);

        return view('web.inicio', compact('posts','images','videos','categories','plans'));
    }

    public function experiencias(){
        $images = Image::orderBy('id', 'DESC')->paginate(6);
        return view('simpleRoutes.experiencias', compact('images'));
    }

    function CreateCustomerMesagge(Request $request)

        {

        $this->validate($request, [
            'name'                      =>      'required',
            'city'                      =>      'required',
            'email'                     =>      'required|email',
            'telephone'                 =>      'required',
            'birthday'                  =>      'required',
            'birthmonth'                =>     'required',
            'message'                   =>      'required',

            //'g-recaptcha-response' => 'required|captcha'
        ]);

        $data=array(

            'name'                         => $request->name,
            'city'                         => $request->city,
            'email'                        => $request->email,
            'telephone'                    => $request->telephone,
            'birthday'                     => $request->birthday,
            'birthmonth'                   => $request->birthmonth,
            'message'                      => $request->message

        );


        $CustomenrComent = Customer::create($request->all());

        Mail::to('jofret_@hotmail.com')->send(new SendMail($data));

        return back()->with('success', "Gracias por su testimonio Sr $request->name, será publicado después que sea revisado por el administrador de nuestro sitio web");

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

    public function videos(){

        $videos = Video::orderBy('id', 'DESC')->paginate(6);

        return view('web.videos', compact('videos'));
    }

   
     public function admin(){
        return view('admin.index');
    }
  
}
