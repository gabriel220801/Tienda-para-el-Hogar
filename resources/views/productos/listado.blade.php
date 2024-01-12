@extends('productos.layout')

@section('custom_styles')
    
@endsection

@section('content')

<div class="container mt-4">
<<<<<<< HEAD
    <h1 class="text-center text-primary mb-4">Productos</h1>
    <div class="row">
        @foreach($producto as $p)
=======
    
        <h1 class="text-center text-primary mb-4">Productos</h1>
        <div class="row">
            @foreach($producto as $p)
>>>>>>> 60e666eb2627991e81c2086f2178cba7aabf87d2
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img class="card-img-top" src='{{ asset("img/$p->fotoproducto") }}' alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$p->nombre}}</h5>
                        <p class="card-text">
                            <b>Descripción:</b> {{$p->descripcion}} <br>
                            <b>Categoría:</b> {{$p->categoria->nom_categoria}} <br>
                            <b>Precio: $</b>{{$p->precio}} <br>
                        </p>
                        dd($producto);
                        <form action="{{ route('carrito.agregar', ['idProducto' => $p->id_producto]) }}" method="post">
                            @csrf
                            <button type="submit">Agregar al Carrito</button>
                        </form>         
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
