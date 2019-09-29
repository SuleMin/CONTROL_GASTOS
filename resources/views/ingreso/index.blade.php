@extends('layout.layouts')
@section('title','ingreso')
@section('content')
<a href="/ingresos/create" class="btn btn-primary mb-2">Nuevo</a>
    <div class="row">
        @foreach ($datos as $ingreso)
            <div class="col-4">
                <div class="card mt-3">
                    <div class="card-header">
                        <p>{{ $ingreso->nombre_ingreso }}</p>
                    </div>
                    <div class="card-body">
                        <p>Fecha : {{ $ingreso->fecha_ingreso }}</p>
                    </div>
                    <div class="card-footer">
                        <form action="/ingresos/{{ $ingreso->id }}">
                            @csrf 
                            @method('GET')
                            <button class="btn btn-primary">Ver mas</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach    
    </div>    
@endsection