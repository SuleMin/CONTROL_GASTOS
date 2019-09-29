@extends('layout.layouts')
@section('title','Contacto')
@section('content')
<h2>REGISTRAR CONTACTO</h2> <br>
<form action="/contactos" method="POST">
    @csrf
    <p>Ingrese su nombre :</p>
    <input type="text" class="form-control" name="name"><br>
    <p>Ingrese su apellido :</p>
    <input type="text" class="form-control" name="lastname"><br>
    <p>Ingrese su telefono :</p>
    <input type="text" class="form-control" name="number"><br>
    <p>Ingrese su direccion :</p>
    <input type="text" class="form-control" name="address"><br>
    <p>Ingrese su C.I. :</p>
    <input type="text" class="form-control" name="cia"><br>
    <button class="btn btn-primary">ENVIAR</button>
</form>
@endsection