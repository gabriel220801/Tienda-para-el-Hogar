

@extends('productos.layout')

@section('custom_styles')
    
@endsection

@section('content')
<div class="container mt-4">
        <h1 class="text-center text-success mb-4">Muebles</h1>
        <div class="row">
            @foreach($muebles as $m)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src='{{ asset("img/$m->fotoproducto") }}' alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$m->nombre}}</h5>
                        <p class="card-text">
                            <b>Descripción:</b> {{$m->descripcion}} <br>
                            <b>Categoría:</b> {{$m->categoria->nom_categoria}} <br>
                            <b>Precio: $</b>{{$m->precio}} <br>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection