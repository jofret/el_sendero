<?php

namespace App\Http\Controllers\Web;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;

use App\Mail\SendToAdminComentMail;


use App\Post;
use App\Trailer;
use App\TrailerCategory;
use App\Category;
use App\Precategory;
use App\Tag;
use App\Image;
use App\Video;
use App\Customer;
use App\Comentario;

class PageController extends Controller
{

    public function inicio(){

        $edicion_actual = TrailerCategory::orderBy('id', 'DESC')->first();

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        //aqui  Publicaciones
        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(4);

        $trailers = Trailer::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

        $categories = Category::all();

        $plans = Tag::all(); 

        // $projects = Post::where('category_id', '>', 1)
        //     ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

        $images = Image::orderBy('id', 'DESC')->paginate(6);
        
        $videos = Video::orderBy('id', 'DESC')->paginate(6);

        return view('web.inicio', compact('edicion_actual','ediciones','posts','images','videos','categories','plans','trailers'));
    }

    // public function experiencias(){
    //     $images = Image::orderBy('id', 'DESC')->paginate(6);
    //     return view('simpleRoutes.experiencias', compact('images'));
    // }

    public function index()
    {
        //uso la vista acuario porque la plantilla acuario contiene el formulario de envío
        return view('layouts.construct');
    }



    public function CreateCustomerMesagge(Request $request)

        {

        $this->validate($request, [
            'name'                      =>      'required',
            'email'                     =>      'required|email',
            'telephone'                 =>      'required',
            'body'                      =>      'required',
            'link'                      =>      'required',

            //'g-recaptcha-response' => 'required|captcha'
        ]);

        $data=array(

            'post_id'                      => $request->post_id,
            'trailer_id'                   => $request->trailer_id,
            'publicacion'                  => $request->publicacion,
            'name'                         => $request->name,
            'email'                        => $request->email,
            'telephone'                    => $request->telephone,
            'body'                         => $request->body,
            'link'                         => $request->link

        );


        $CustomenrComent = Comentario::create($request->all());

        Mail::to('jofret_@hotmail.com')->send(new SendToAdminComentMail($data));

        return back()->with('success', "Sr. $request->name, gracias por su mensaje, será revisado por el administrador de nuestro sitio web antes de ser publicado. Se le notificará vía email. Felices 24 horas.");

    }


    //publicaciones
    public function category($slug){

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        $categoryName = Category::where('slug', $slug)->pluck('name')->first();

        $category = Category::where('slug', $slug)->pluck('id')->first();
        

        $lastPost= Post::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->first();

        $posts = Post::orderBy('id', 'DESC')->where('category_id', $category)
                ->where('status', 'PUBLISHED')->where('id', '<>', $lastPost->id)->get();

        $lastPosts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);


        $categories = Category::all();

        $plans = Tag::all(); 

        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.category_with_slug', compact('ediciones','category','categoryName','lastPost','posts', 'lastPosts','categories','plans','images'));
    }


public function posts(){

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        $lastPost= Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->first();

        /*$excepto = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->first();*/

        $posts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->where('id', '<>', $lastPost->id)->paginate(9);

        $lastPosts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);


        $categories = Category::all();

        $plans = Tag::all(); 

        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.posts', compact('ediciones','lastPost','posts', 'lastPosts','categories','plans','images'));
    }


    public function post($slug){

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        $post = Post::where('slug', $slug)->first();

        $comentarios = Comentario::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->where('publicacion', 'publicacion')->where('post_id', $post->id)->get();

        $lastPosts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

        $category = Post::where('slug', $slug)->pluck('category_id')->first();

        $categories = Category::all();

        $plans = Tag::all(); 

        $excepto = Post::where('slug',$slug)->pluck('id')->first();

        $productsRelations = Post::orderBy('category_id', 'DESC')->where('category_id', $category)
                ->orderBy('id','DESC')->where('status','PUBLISHED')->where('id', '<>', $excepto)->get();

        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.post', compact('ediciones','post','comentarios','lastPosts','category','categories','plans','productsRelations','excepto','images'));
    }



   
    
    public function tag($slug){ 

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        $categoryName = Tag::where('slug', $slug)->pluck('name')->first();
        
        $lastPost = Post::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->first();

        $posts = Post::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->where('id', '<>', $lastPost->id)
        ->paginate(9);

        $lastPosts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

        $category = Category::where('slug', $slug)->pluck('id')->first();

        $categories = Category::all();

        $plans = Tag::all();
        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.category_with_slug', compact('ediciones','categoryName','lastPost','posts','lastPosts','category','categories','plans','images'));
    }


    /******imagenes*******/

    public function galery(){

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        $images = Image::orderBy('id', 'DESC')->paginate(10);

        $lastPosts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

        $categories = Category::all();

        $plans = Tag::all();

        return view('web.galery', compact('ediciones','images','lastPosts','categories','plans'));
    }

    public function tagImage($slug){
        //$images = Image::orderBy('id', 'DESC')->paginate(9);

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        $images = Image::whereHas('tags', function($query) use ($slug) {
            $query->where('slug', $slug);
        })
        ->orderBy('id', 'DESC')
        ->paginate(9);

        $lastPosts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

        $categories = Category::all();

        $plans = Tag::all();

        return view('web.galery', compact('ediciones','images','lastPosts','categories','plans'));
    }


    ///AQUI LOS TRAILERS
    public function trailers(){

        $lastTrailer= Trailer::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->first();


        $trailers = Trailer::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->where('id', '<>', $lastTrailer->id)->paginate(9);

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        $lastPosts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);


        $categories = Category::all();

        $plans = Tag::all(); 

        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.trailers', compact('lastTrailer','trailers','ediciones', 'lastPosts','categories','plans','images'));
    }


    public function trailer($slug){
        $trailer = Trailer::where('slug', $slug)->first();

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        $lastPosts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

        $comentarios = Comentario::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->where('publicacion', 'trailer')->where('trailer_id', $trailer->id)->get();

        $category = Post::where('slug', $slug)->pluck('category_id')->first();

        $categories = Category::all();

        $plans = Tag::all(); 

        $excepto = Post::where('slug',$slug)->pluck('id')->first();

        $productsRelations = Post::orderBy('category_id', 'DESC')->where('category_id', $category)
                ->orderBy('id','DESC')->where('status','PUBLISHED')->where('id', '<>', $excepto)->get();

        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.trailer', compact('trailer','ediciones','lastPosts','comentarios','category','categories','plans','productsRelations','excepto','images'));
    }


    //trailers-category
    public function trailercategory($slug){

        $categoryName = TrailerCategory::where('slug', $slug)->pluck('name')->first();

        $category = TrailerCategory::where('slug', $slug)->pluck('id')->first();
        $lastTrailer= Trailer::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->first();

        /*$excepto = Post::where('category_id', $category)
            ->orderBy('id', 'DESC')->where('status', 'PUBLISHED')->first();*/

        

        
        $trailers = Trailer::orderBy('id', 'DESC')->where('category_id', $category)
                ->where('status', 'PUBLISHED')->where('id', '<>', $lastTrailer->id)->get();

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        $lastPosts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);


        $categories = Category::all();

        $plans = Tag::all(); 

        $images = Image::orderBy('id', 'DESC')->paginate(6);

        return view('web.trailerscategory_with_slug', compact('category','categoryName','lastTrailer','trailers', 'ediciones', 'lastPosts','categories','plans','images'));
    }





    public function videos(){

        $videos = Video::orderBy('id', 'DESC')->paginate(6);

        return view('web.videos', compact('videos'));
    }

   
   public function contact(){

        $ediciones = TrailerCategory::orderBy('id', 'DESC')->get();

        $images = Image::orderBy('id', 'DESC')->paginate(9);

        $lastPosts = Post::orderBy('id', 'DESC')->where('status', 'PUBLISHED')->paginate(6);

        $categories = Category::all();

        $plans = Tag::all();

        return view('web.contact_information', compact('ediciones','images','lastPosts','categories','plans'));
        //return view('web.contact_information');
    }

   
     public function admin(){
        return view('admin.index');
    }
  
}
