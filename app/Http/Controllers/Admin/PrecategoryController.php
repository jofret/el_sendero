<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Requests\PrecategoryStoreRequest;
use App\Http\Requests\PrecategoryUpdateRequest;

use App\Http\Controllers\Controller;

use App\Precategory;

class PrecategoryController extends Controller
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
        $precategories = Precategory::orderBy('id', 'DESC')->paginate();

        return view('admin.precategories.index', compact('precategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.precategories.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PrecategoryStoreRequest $request)
    {
        $precategory = Precategory::create($request->all());

        return redirect()->route('precategories.edit', $precategory->id)->with('info', 'Precategoría creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $precategory = Precategory::find($id);

        return view('admin.precategories.show', compact('precategory'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $precategory = Precategory::find($id);

        return view('admin.precategories.edit', compact('precategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(PrecategoryUpdateRequest $request, $id)
    {
        $precategory = Precategory::find($id);

        $precategory->fill($request->all())->save();

        return redirect()->route('precategories.edit', $precategory->id)->with('info', 'Precategoría actualizada con éxito');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $precategory = Precategory::find($id)->delete();

        return back()->with('info', 'Eliminado correctamente');
    }
}
