<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\TrailerCategoryStoreRequest;
use App\Http\Requests\TrailerCategoryUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;

use App\TrailerCategory;
use App\Precategory;

class TrailerCategoryController extends Controller
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
        $categories = TrailerCategory::orderBy('id', 'DESC')->paginate();

        return view('admin.trailer_categories.index', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $precategories = Precategory::orderBy('name', 'ASC')->pluck('name', 'id');
        return view('admin.trailer_categories.create',compact('precategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrailerCategoryStoreRequest $request)
    {
        $category = TrailerCategory::create($request->all());

        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $category->fill(['file' => asset($path)])->save();
        }


        return redirect()->route('trailer_categories.edit', $category->id)->with('info', 'Categoría creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $category = TrailerCategory::find($id);

        return view('admin.trailer_categories.show', compact('category'));
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
        $category = TrailerCategory::find($id);

        return view('admin.trailer_categories.edit', compact('category','precategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrailerCategoryUpdateRequest $request, $id)
    {
        $category = TrailerCategory::find($id);

        $category->fill($request->all())->save();

        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $category->fill(['file' => asset($path)])->save();
        }

        return redirect()->route('trailer_categories.edit', $category->id)->with('info', 'Categoría actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = TrailerCategory::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
