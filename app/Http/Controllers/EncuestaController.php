<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Encuesta;

class EncuestaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $encuestas = Encuesta::orderBy('id', 'DESC')->get();
        return view('admin.index', compact('encuestas'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $this->validate($request, [
            'encuesta'                      =>      'required',

        ]);       


        //$encuesta->fill($request->all())->save();
        //Comentario::create($request->all());

        $encuesta = Encuesta::create($request->all());

        //return back()->with('info', 'Eliminado corretamente');

        return redirect()->to('https://docs.google.com/forms/d/e/1FAIpQLSeWVzbomc_2LkZ2njb7pHfFrMqz7E_Q5Tb46HuPU3XboA08yg/viewform');
            //->with('info', 'Publicación creada con éxito');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
