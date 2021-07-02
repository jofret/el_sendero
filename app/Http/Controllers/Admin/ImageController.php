<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\ImageStoreRequest;
use App\Http\Requests\ImageUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

use App\Image;
use App\Category;
use App\Precategory;
use App\Tag;

class imageController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
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
        $images = Image::orderBy('id', 'DESC')->paginate();

        return view('admin.images.index', compact('images'));
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

        return view('admin.images.create', compact('categories','precategories','tags'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ImageStoreRequest $request)
    {
        $image = Image::create($request->all());

        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $image->fill(['file' => asset($path)])->save();
        }

        //TAGS
        $image->tags()->attach($request->get('tags'));


        return redirect()->route('images.edit', $image->id)->with('info', 'Imagen creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $image = Image::find($id);
        //$this->authorize('pass', $image);

        return view('admin.images.show', compact('image'));
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
        $image = Image::find($id);

        return view('admin.images.edit', compact('image','categories','tags','precategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(ImageUpdateRequest $request, $id)
    {
        $image = Image::find($id);

        $image->fill($request->all())->save();

        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $image->fill(['file' => asset($path)])->save();
        }

        //TAGS
        $image->tags()->sync($request->get('tags'));

        return redirect()->route('images.edit', $image->id)->with('info', 'Imagen actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $image = Image::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
