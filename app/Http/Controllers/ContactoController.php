<?php

namespace App\Http\Controllers;
use App\Mail\MessageReceived;
use Illuminate\Support\Facades\Mail;
use App\Contacto;
use Illuminate\Http\Request;

class ContactoController extends Controller
{
    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('contacto.contacto');

    }
    public function store ()
       {
           
            $mensaje = request()->validate([
                'nombrecontacto'=>'required',
                'mail'          =>'required|email',
                'contenido'       =>'required',
             ]);    
        
        Mail::to('sulemalucasmin@gmail.com')->queue(new MessageReceived($mensaje));  
            //return new MessageReceived ($mensaje); 
            return 'datos validados';
    }

}
