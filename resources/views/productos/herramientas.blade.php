
@extends('productos.layout')

@section('custom_styles')
    
@endsection

@section('content')
<div class="container mt-4">
        <h1 class="text-center text-success mb-4">Herramientas y Accesorios</h1>
        <div class="row">
            @foreach($herramientas as $h)
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src='{{ asset("img/$h->fotoproducto") }}' alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$h->nombre}}</h5>
                        <p class="card-text">
                            <b>Descripción:</b> {{$h->descripcion}} <br>
                            <b>Categoría:</b> {{$h->categoria->nombre}} <br>
                            <b>Precio: $</b>{{$h->precio}} <br>
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@endsection