@extends('layout.layouts')
@section('title','Gasto')
@section('content')
<a href="/gastos/create" class="btn btn-primary mb-2">NUEVO</a>
    <div class="row">
        @foreach ($datos as $gasto)
            <div class="col-4">
                <div class="card mt-3">
                    <div class="card-header">
                        <p>{{ $gasto->nombre_gasto }}</p>
                    </div>
                    <div class="card-body">
                        <p>Fecha : {{ $gasto->fecha_gasto }}</p>
                    </div>
                    <div class="card-footer">
                        <form action="/gastos/{{ $gasto->id }}">
                            @csrf 
                            @method('GET')
                            <button class="btn btn-primary">Ver mas...</button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach    
    </div>    
@endsection