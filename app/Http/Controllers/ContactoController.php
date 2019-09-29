<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Mail\MessageReceived;
use App\Contacto;
use Illuminate\Support\Facades\Mail;


class ContactoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Contacto::all();
        return view('contacto.index',compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contacto.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
            $message = request()->validate([
                'name' =>'required',
                'lastname' =>'required',
                'number' =>'required',
                'address' =>'required',
                'cia' =>'required',

            ]);
            
            Mail::to('sulemalucasmin@gamil.com')->queue( new MessageReceived($message));
//return new MessageReceived($message); 
return 'datos validados';

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Contacto $contacto)
    {
        return view ('contacto.show',compact('contacto'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Contacto $contacto)
    {
        return view ('contacto.edit', compact('contacto'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contacto $contacto)
    {
        $contacto->nombre=$request->name;
        $contacto->apellido=$request->lastname;
        $contacto->telefono=$request->number;
        $contacto->direccion=$request->address;
        $contacto->ci=$request->cia;
        $contacto->save();
        $datos=Contacto::all();
        return view('contacto.index', compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contacto $contacto)
    {
        $contacto->delete();
        $datos=Contacto::all();
        return view('contacto.index', compact('datos'));
    }
}
