<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\PostStoreRequest;
use App\Http\Requests\PostUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

use App\Post;
use App\Category;
use App\Precategory;
use App\Tag;



class PostController extends Controller
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
        $posts = Post::orderBy('id', 'DESC')
            ->where('user_id', auth()->user()->id)
            ->paginate();

        return view('admin.posts.index', compact('posts'));
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
    public function store(PostStoreRequest $request)
    {
        $post = Post::create($request->all());

        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file2')){
            $path = Storage::disk('public')->put('image', $request->file('file2'));
            $post->fill(['file2' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file3')){
            $path = Storage::disk('public')->put('image', $request->file('file3'));
            $post->fill(['file3' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file4')){
            $path = Storage::disk('public')->put('image', $request->file('file4'));
            $post->fill(['file4' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file5')){
            $path = Storage::disk('public')->put('image', $request->file('file5'));
            $post->fill(['file5' => asset($path)])->save();
        }

        //TAGS
        $post->tags()->attach($request->get('tags'));

        return redirect()->route('posts.edit', $post->id)
            ->with('info', 'Publicación creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);
        return view('admin.posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $precategories = Precategory::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories = Category::orderBy('name', 'ASC')->pluck('name', 'id');
        $tags = Tag::orderBy('name', ' ASC')->get();
        $post = Post::find($id);
        $this->authorize('pass', $post);

        return view('admin.posts.edit', compact('post', 'categories', 'tags','precategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PostUpdateRequest $request, $id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->fill($request->all())->save();

        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $post->fill(['file' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file2')){
            $path = Storage::disk('public')->put('image', $request->file('file2'));
            $post->fill(['file2' => asset($path)])->save();
        }

        //IMAGE3
        if($request->file('file3')){
            $path = Storage::disk('public')->put('image', $request->file('file3'));
            $post->fill(['file3' => asset($path)])->save();
        }

        //IMAGE4
        if($request->file('file4')){
            $path = Storage::disk('public')->put('image', $request->file('file4'));
            $post->fill(['file4' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file5')){
            $path = Storage::disk('public')->put('image', $request->file('file5'));
            $post->fill(['file5' => asset($path)])->save();
        }

        //TAGS
        $post->tags()->sync($request->get('tags'));

        return redirect()->route('posts.edit', $post->id)
            ->with('info', 'Publicación actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        $this->authorize('pass', $post);
        $post->delete();

        return back()->with('info', 'Eliminado corretamente');
    }
}
