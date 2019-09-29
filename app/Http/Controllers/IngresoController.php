<?php

namespace App\Http\Controllers;

use App\Ingreso;
use Illuminate\Http\Request;

class IngresoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $datos=Ingreso::all();
        return view('ingreso.index', compact('datos'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('ingreso.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $datos= new Ingreso();
        $datos->nombre_ingreso =$request->name_i;
        $datos->descripcion_ingreso =$request->descripcion_i;
        $datos->monto_ingreso =$request->monto_i;
        $datos->fecha_ingreso =$request->fecha_i;
        $datos->save();
        $datos=Ingreso::all();
        return view('ingreso.index', compact('datos'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Ingreso $ingreso)
    {
        return view('ingreso.show',compact('ingreso'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Ingreso $ingreso)
    {
        return view('ingreso.edit',compact('ingreso'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Ingreso $ingreso)
    {
        $ingreso->nombre_ingreso =$request->name_i;
        $ingreso->descripcion_ingreso =$request->descripcion_i;
        $ingreso->monto_ingreso =$request->monto_i;
        $ingreso->fecha_ingreso =$request->fecha_i;
        $ingreso->save();
        $datos=Ingreso::all();
        return view('ingreso.index', compact('datos'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Ingreso $ingreso)
    {
        $ingreso->delete();
        $datos=Ingreso::all();
        return view('ingreso.index', compact('datos'));
    }
}
