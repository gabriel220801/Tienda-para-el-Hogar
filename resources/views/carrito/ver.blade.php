@extends('productos.layout')

@section('custom_styles')
    
@endsection

@section('content')
    <div class="container">
        <h1>Carrito de Compras</h1>

        @if ($productosCarrito->isEmpty())
            <p>El carrito está vacío.</p>
        @else
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <!-- Agrega más columnas según sea necesario -->
                    </tr>
                </thead>
                <tbody>
                    @foreach ($productosCarrito as $producto)
                        <tr>
                            <td>{{ $producto->id }}</td>
                            <!-- Agrega más celdas según sea necesario -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>
@endsection