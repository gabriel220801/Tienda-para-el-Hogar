

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Productos</h1>
    
@stop

@section('content')

<div class='container text-right'>
    <a href={{route('form_registro_pro')}} class="btn btn-outline-success">Adicionar</a>
</div>

<br>

<table class="table" id="table-products">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Precio</th>
            <th scope="col">Categoria</th>
            <th scope="col">Imagen</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1; 
            @endphp
            @foreach($query as $p)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$p->id_producto}}</td>
                <td>{{$p->nombre}}</td>
                <td>{{$p->descripcion}}</td>
                <td>{{$p->precio}}</td>
                <td>{{$p->categoria->nom_categoria}}</td>
                <td><img class="card-img-top" src='{{url("/img/$p->fotoproducto")}}' alt="Card image cap" ></td>
                <td>
                    <div class="btn-group">
                        <div class="mr-2">
                            <a href="{{ route('editar_pro', $p->id_producto) }}" class="btn btn-outline-primary">Editar</a>
                        </div>
                        <div>
                            <a href="{{ route('eliminar_pro', $p->id_producto) }}" class="btn btn-outline-danger">Eliminar</a>
                        </div>
                    </div>
                </td>

                @php 
                    $i = $i + 1;
                @endphp
            </tr>
            @endforeach

        </tbody>
</table>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.css" />
@stop

@section('js')
    <script> console.log('Hi!'); </script>
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.js"></script>
    <script>
        $(document).ready( function () {
            $('#table-products').DataTable({
                "language": {
                    "url": "//cdn.datatables.net/plug-ins/1.10.24/i18n/Spanish.json"
                }
            });;
        });

    </script>
@stop