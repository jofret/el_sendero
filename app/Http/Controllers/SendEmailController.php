<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;

class SendEmailController extends Controller
{
    //
    function index()
    {
    	//uso la vista main_sunat porque la plantilla main_sunat contiene el formulario de envío
    	return view('layouts.main_sunat');
    }

    function send(Request $request)
    {
    	$this->validate($request, [
    		'name' 			=>		'required',
    		'message' 		=>		'required',
    		'email' 		=>		'required|email',
    		'telephone' 	=>		'required',
    		'g-recaptcha-response' => 'required|captcha'
    	]);

    	$data=array(
    		'name'			=> $request->name,
    		'email'			=> $request->email,
    		'telephone'		=> $request->telephone,
    		'message'		=> $request->message

    	);

    	Mail::to('consultores.criollo.valdivieso@gmail.com')->send(new SendMail($data));

    	return back()->with('success', 'Gracias por contactarnos, en breve nos comunicaremos!');

    }
}
