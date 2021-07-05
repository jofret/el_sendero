<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;

use App\Http\Requests\TrailerStoreRequest;
use App\Http\Requests\TrailerUpdateRequest;

use Illuminate\Support\Facades\Storage;

use App\Http\Controllers\Controller;


use App\Trailer;
use App\TrailerCategory;
use App\Precategory;



class TrailerController extends Controller
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
        $trailers = Trailer::orderBy('id', 'DESC')
            //->where('user_id', auth()->user()->id)
            ->paginate();

        return view('admin.trailers.index', compact('trailers'));
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $precategories = Precategory::orderBy('name', 'ASC')->pluck('name', 'id');
        $categories = TrailerCategory::orderBy('name', 'ASC')->pluck('name', 'id');
        

        return view('admin.trailers.create', compact('categories','precategories'));
    }



    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(TrailerStoreRequest $request)
    {
        $trailer = Trailer::create($request->all());

        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $trailer->fill(['file' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file2')){
            $path = Storage::disk('public')->put('image', $request->file('file2'));
            $trailer->fill(['file2' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file3')){
            $path = Storage::disk('public')->put('image', $request->file('file3'));
            $trailer->fill(['file3' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file4')){
            $path = Storage::disk('public')->put('image', $request->file('file4'));
            $trailer->fill(['file4' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file5')){
            $path = Storage::disk('public')->put('image', $request->file('file5'));
            $trailer->fill(['file5' => asset($path)])->save();
        }



        return redirect()->route('trailers.edit', $trailer->id)
            ->with('info', 'trailer creado con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $trailer = Trailer::find($id);
        //$this->authorize('pass', $trailer);
        return view('admin.trailers.show', compact('trailer'));
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
        $categories = TrailerCategory::orderBy('name', 'ASC')->pluck('name', 'id');
        $trailer = Trailer::find($id);
        //$this->authorize('pass', $trailer);

        return view('admin.trailers.edit', compact('trailer', 'categories','precategories'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(TrailerUpdateRequest $request, $id)
    {
        $trailer = Trailer::find($id);
        //$this->authorize('pass', $trailer);
        $trailer->fill($request->all())->save();

        //IMAGE
        if($request->file('file')){
            $path = Storage::disk('public')->put('image', $request->file('file'));
            $trailer->fill(['file' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file2')){
            $path = Storage::disk('public')->put('image', $request->file('file2'));
            $trailer->fill(['file2' => asset($path)])->save();
        }

        //IMAGE3
        if($request->file('file3')){
            $path = Storage::disk('public')->put('image', $request->file('file3'));
            $trailer->fill(['file3' => asset($path)])->save();
        }

        //IMAGE4
        if($request->file('file4')){
            $path = Storage::disk('public')->put('image', $request->file('file4'));
            $trailer->fill(['file4' => asset($path)])->save();
        }

        //IMAGE2
        if($request->file('file5')){
            $path = Storage::disk('public')->put('image', $request->file('file5'));
            $trailer->fill(['file5' => asset($path)])->save();
        }

        

        return redirect()->route('trailers.edit', $trailer->id)
            ->with('info', 'trailer actualizado con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $trailer = Trailer::find($id);
        //$this->authorize('pass', $trailer);
        $trailer->delete();

        return back()->with('info', 'Eliminado corretamente');
    }
}
