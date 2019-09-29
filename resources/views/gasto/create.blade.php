@extends('layout.layouts')
@section('title','Gasto')
@section('content')
<h2>REGISTRAR GASTO</h2> <br>
<form action="/gastos" method="POST">
    @csrf
    <p>Nombre del gasto :</p>
    <input type="text" class="form-control" name="name_g"><br>
    <p>Fecha del gasto :</p>
    <input type="date" class="form-control" name="fecha_g"><br>
    <p>Descripcion del gasto :</p>
    <input type="text" class="form-control" name="descripcion_g"><br>
    <p>Monto del gasto :</p>
    <input type="text" class="form-control" name="monto_g"><br>
    <button class="btn btn-primary">GUARDAR</button>
</form>
@endsection