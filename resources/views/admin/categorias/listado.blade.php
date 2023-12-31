

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Categorias</h1>
    
@stop

@section('content')


<br>
<table class="table" id="table-category">
        <thead>
            <tr>
            <th scope="col">N°</th>
            <th scope="col">Codigo</th>
            <th scope="col">Nombre</th>
            <th scope="col">Opciones</th>
            </tr>
        </thead>
        <tbody>
            @php
                $i = 1; 
            @endphp
            @foreach($query as $c)
            <tr>
                <th scope="row">{{$i}}</th>
                <td>{{$c->id_categoria}}</td>
                <td>{{$c->nombre}}</td>
                <td>
                        <a href="" class="btn btn-success">Editar</a>
                        <a href="" class="btn btn-danger">Eliminar</a>        
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