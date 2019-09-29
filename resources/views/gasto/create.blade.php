<h2>Registrar Gasto</h2> <br>
<form action="/gastos" method="POST">
    @csrf
    <p>Ingrese el nombre del gasto :</p>
    <input type="text" class="form-control" name="name_g"><br>
    <p>Ingrese la fecha del gasto :</p>
    <input type="date" class="form-control" name="fecha_g"><br>
    <p>Ingrese la descripcion del gasto :</p>
    <input type="text" class="form-control" name="descripcion_g"><br>
    <p>Ingrese el monto del gasto :</p>
    <input type="text" class="form-control" name="monto_g"><br>
    <button class="btn btn-primary">Guardar Gasto</button>
</form>
@endsection