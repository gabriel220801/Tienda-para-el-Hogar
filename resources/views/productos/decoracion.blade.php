

@extends('productos.layout')

@section('custom_styles')
    
@endsection

@section('content')
<div class="container mt-4">
        <h1 class="text-center text-success mb-4">Decoracion</h1>
        <div class="row">
            @foreach($decoraciones as $d)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src='{{ asset("img/$d->fotoproducto") }}' alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$d->nombre}}</h5>
                        <p class="card-text">
                            <b>Descripción:</b> {{$d->descripcion}} <br>
                            <b>Categoría:</b> {{$d->categoria->nombre}} <br>
                            <b>Precio: $</b>{{$d->precio}} <br>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection

