@extends('layout.layouts')
@section('content')
<div class="card text-left">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <p class="mt-2">DETALLE DEL INGRESO:</p>
            <div class="btn-group"> 
            <form action="/ingresos/{{ $ingreso->id }}/edit">
                    <button class="btn btn-success mr-2">EDITAR</button>
                </form>
            <form action="/ingresos/{{ $ingreso->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">ELIMINAR</button>                                 
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $ingreso->nombre_ingreso }}</h5>
      <hr style="text-align : left">
      <p class="card-text"></p>
      <p class="card-text">Descripcion: {{ $ingreso->descripcion_ingreso }}</p>
      <p class="card-text">Monto: {{ $ingreso->monto_ingreso }}</p>
      <p class="card-text">Fecha.: {{ $ingreso->fecha_ingreso }}</p>
      <a href="/ingresos" class="btn btn-primary">ANTERIOR</a>
    </div>
  </div>
  @endsection