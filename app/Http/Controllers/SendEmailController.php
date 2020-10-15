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
    	//uso la vista chicoteca porque la plantilla chicoteca contiene el formulario de envío
    	return view('layouts.chicoteca');
    }

    function send(Request $request)
    {
    	$this->validate($request, [
    		'name' 			=>		'required',
    		'lastname' 		=>		'required',
    		'email' 		=>		'required|email',
    		'telephone' 	=>		'required',
    		'g-recaptcha-response' => 'required|captcha'
    	]);

    	$data=array(
    		'name'			=> $request->name,
    		'lastname'		=> $request->lastname,
    		'email'			=> $request->email,
    		'telephone'		=> $request->telephone,
    		'message'		=> $request->message

    	);

    	Mail::to('cotizaciones@chicoteca.pe')->send(new SendMail($data));

    	return back()->with('success', 'Gracias por contactarnos, en breve nos comunicaremos!');

    }
}
