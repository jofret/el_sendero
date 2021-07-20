<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

use Illuminate\Support\Facades\Mail;

use App\Mail\SendToUserComentMail;

use App\Post;
use App\Category;
use App\Precategory;
use App\Tag;
use App\Comentario;



class ComentarioController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $comentarios = Comentario::orderBy('id', 'DESC')
            //->where('user_id', auth()->user()->id)
            ->paginate();

        return view('admin.comentarios.index', compact('comentarios'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $precategories = Precategory::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', ' ASC')->get();

        return view('admin.posts.create', compact('categories', 'tags','precategories'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
/*    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());

        return redirect()->route('posts.edit', $post->id)
            ->with('info', 'Publicación creada con éxito');
    }*/

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
/*    public function show($id)
    {
        $post = Post::find($id);
        //$this->authorize('pass', $post);
        return view('admin.comentarios.show', compact('post'));
    }*/

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $comentario = Comentario::find($id);
        //$this->authorize('pass', $comentario);

        return view('admin.comentarios.edit', compact('comentario'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name'                      =>      'required',
            'email'                     =>      'required|email',
            'notificar'                 =>      'required',
            'link'                      =>      'required',
            //'g-recaptcha-response' => 'required|captcha'
        ]);

        $data=array(

            
            'name'                         => $request->name,
            'email'                        => $request->email,
            'respuesta'                    => $request->respuesta,
            'fecha_respuesta'               =>$request->fecha_respuesta,
            'notificar'                    => $request->notificar,
            'link'                         => $request->link,
            'body'                         => $request->body,

              
        );
        $comentario = Comentario::find($id);
        //$this->authorize('pass', $post);

        $comentario->fill($request->all())->save();

        Mail::to($data['email'])->send(new SendToUserComentMail($data));

        return back()->with('info', 'Publicación Actualizada con éxito y Notificación de Email Enviada');
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $comentario = Comentario::find($id);
        //$this->authorize('pass', $post);
        $comentario->delete();

        return back()->with('info', 'Eliminado corretamente');
    }
}
