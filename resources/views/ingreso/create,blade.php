@extends('layout.layouts')
@section('title','Ingreso')
@section('content')
<h2>Registrar Ingreso</h2> <br>
<form action="/ingresos" method="POST">
    @csrf
    <p>Ingrese el nombre del ingreso :</p>
    <input type="text" class="form-control" name="name_i"><br>
    <p>Ingrese la fecha del ingreso :</p>
    <input type="date" class="form-control" name="fecha_i"><br>
    <p>Ingrese la descripcion del ingreso :</p>
    <input type="text" class="form-control" name="descripcion_i"><br>
    <p>Ingrese el monto del ingreso :</p>
    <input type="text" class="form-control" name="monto_i"><br>
    <button class="btn btn-primary">Guardar Ingreso</button>
</form>
@endsection