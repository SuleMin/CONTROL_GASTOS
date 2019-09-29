@extends('layout.layouts')
@section('title','Ingreso')
@section('content')
<h2>REGISTRAR INGRESO</h2> <br>
<form action="/ingresos" method="POST">
    @csrf
    <p>Nombre del ingreso :</p>
    <input type="text" class="form-control" name="name_i"><br>
    <p>Fecha del ingreso :</p>
    <input type="date" class="form-control" name="fecha_i"><br>
    <p>Descripcion del ingreso :</p>
    <input type="text" class="form-control" name="descripcion_i"><br>
    <p>Monto del ingreso :</p>
    <input type="text" class="form-control" name="monto_i"><br>
    <button class="btn btn-primary">GUARDAR</button>
</form>
@endsection