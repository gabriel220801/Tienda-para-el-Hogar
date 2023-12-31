

@extends('productos.layout')

@section('custom_styles')
    
@endsection

@section('content')
    <div class="container mt-4">
        <h1 class="text-center text-success mb-4">Almacenamientos</h1>
        <div class="row">
            @foreach($almacenamientos as $a)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src='{{ asset("img/$a->fotoproducto") }}' alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$a->nombre}}</h5>
                        <p class="card-text">
                            <b>Descripción:</b> {{$a->descripcion}} <br>
                            <b>Categoría:</b> {{$a->categoria->nombre}} <br>
                            <b>Precio: $</b>{{$a->precio}} <br>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection


