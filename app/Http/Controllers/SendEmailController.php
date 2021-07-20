<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

use App\Mail\SendMail;

class SendEmailController extends Controller
{

    function index()
    {
    	//uso la vista acuario porque la plantilla acuario contiene el formulario de envío
    	return view('layouts.construct');
    }

    function send(Request $request)
    {
    	
    	

    	$this->validate($request, [
            'name'                      =>      'required',
            'email'                     =>      'required|email',
            'telephone'                 =>      'required',
            'message'                   =>      'required',
            'g-recaptcha-response'      =>      'required|captcha'

            ]);

            $data=array(

            
            'name'			               => $request->name,
    		'email'			               => $request->email,
    		'telephone'		               => $request->telephone,
    		'message'		               => $request->message

    	);

    	Mail::to('jofret_@hotmail.com')->send(new SendMail($data));

    	return back()->with('success', 'Gracias por contactarnos, en breve nos comunicaremos!');

    }
}
