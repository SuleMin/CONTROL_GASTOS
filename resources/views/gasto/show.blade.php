@extends('layout.layouts')
@section('content')
<div class="card text-left">
    <div class="card-header">
        <div class="d-flex justify-content-between">
            <p class="mt-2">DETALLE DEL GASTO:</p>
            <div class="btn-group"> 
            <form action="/gastos/{{ $gasto->id }}/edit">
                    <button class="btn btn-success mr-2">EDITAR</button>
                </form>
            <form action="/gastos/{{ $gasto->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger">ELIMINAR</button>                                 
                </form>
            </div>
        </div>
    </div>
    <div class="card-body">
      <h5 class="card-title">{{ $gasto->nombre_gasto }}</h5>
      <hr style="text-align : left">
      <p class="card-text"></p>
      <p class="card-text">Descripcion: {{ $gasto->descripcion_gasto }}</p>
      <p class="card-text">Monto: {{ $gasto->monto_gasto }}</p>
      <p class="card-text">Fecha.: {{ $gasto->fecha_gasto }}</p>
      <a href="/gastos" class="btn btn-primary">ANTERIOR</a>
    </div>
  </div>
  @endsection