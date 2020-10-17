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
    	//uso la vista acuario porque la plantilla acuario contiene el formulario de envío
    	return view('layouts.acuarius');
    }

    function send(Request $request)
    {
    	$this->validate($request, [
            'particularInstitucion'     =>      'required',
    		'name' 			            =>		'required',
    		'email' 		            =>		'required|email',
    		'telephone' 	            =>		'required',
            'message'                   =>      'required',

    		'g-recaptcha-response' => 'required|captcha'
    	]);

    	$data=array(
    		'particularInstitucion'        => $request->particularInstitucion,
            'name'			               => $request->name,
    		'email'			               => $request->email,
    		'telephone'		               => $request->telephone,
            'adultos'                      => $request->adultos,
            'ninos'                        => $request->ninos,
    		'message'		               => $request->message

    	);

    	Mail::to('EvelynMonteza@hotmail.com')->send(new SendMail($data));

    	return back()->with('success', 'Gracias por contactarnos, en breve nos comunicaremos!');

    }
}
