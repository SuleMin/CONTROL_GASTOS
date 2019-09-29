@extends('layout.layouts')
@section('title','Gasto')
@section('content')
<h2>EDITAR GASTO</h2> <br>
<form action="/gastos/{{ $gasto->id }}" method="POST">
    @csrf
    @method('PUT')
    <p>Nombre del gasto :</p>
    <input type="text" class="form-control" name="name_g" value="{{ $gasto->nombre_gasto }}"><br>
    <p>Descripcion del gasto :</p>
    <input type="text" class="form-control" name="descripcion_g" value="{{ $gasto->descripcion_gasto }}"><br>
    <p>Fecha del gasto :</p>
    <input type="text" class="form-control" name="fecha_g" value="{{ $gasto->fecha_gasto }}"><br>
    <p>Monto del gasto :</p>
    <input type="text" class="form-control" name="monto_g" value="{{ $gasto->monto_gasto }}"><br>
    <button class="btn btn-primary">ACTUALIZAR</button>
</form>
@endsection