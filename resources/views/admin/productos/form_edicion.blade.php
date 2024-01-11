@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<div class="centrado">
<h1>Actualización de Programas</h1>
    <form action="{{ url('/admin/productos/editar', $producto->id_producto) }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id_producto" class="form-label">Codigo Programa</label>
            <input type="text" class="form-control" id="id_producto" name="id_producto" value="{{ $producto->id_producto }}">
        </div>
        <div class="mb-3">
            <label for="nom_producto" class="form-label">Nombre programa</label>
            <input type="text" class="form-control" id="nom_producto" name="nom_producto" value="{{ $producto->nombre }}">
        </div>

        <div class="mb-3">
            <label for="des_producto" class="form-label">Descripcion Producto</label>
            <input type="text" class="form-control" id="des_producto" name="des_producto" value="{{ $producto->descripcion }}">
        </div>
        <div class="mb-3">
            <label for="pre_producto" class="form-label">Precio Producto</label>
            <input type="text" class="form-control" id="pre_producto" name="pre_producto" value="{{ $producto->precio }}">
        </div>

        <div class="mb-3">
            <label for="id_categoria" class="form-label">Categoria</label>
            <select class="form-control" aria-label="id_categoria" name="id_categoria">
                @foreach ($categoria as $c)
                    <option value="{{ $c->id_categoria }}" {{ $c->id_categoria == $producto->id_categoria ? 'selected' : '' }}>
                        {{ $c->nom_categoria }}
                    </option>
                @endforeach
            </select>
        </div>

        <div class="mb-3 text-center">
            <label for="fotoproducto" class="form-label">Imagen Actual</label>
            <img src="{{ asset('img/' . $producto->fotoproducto) }}" alt="Imagen Actual" style="max-width: 200px; max-height: 200px;" class="mx-auto d-block">
        </div>


        <div class="mb-3" style="display: flex; flex-direction: column;">
            <label for="fotoproducto" class="form-label">Seleccionar Nueva Imagen</label>
            <input type="file" class="form-control" id="fotoproducto" name="fotoproducto">
        </div>

        
        <button type="submit" class="btn btn-outline-success">Editar</button>
    </form>
    </div>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
    <style>
    .centrado {
        font-family: 'Times New Roman', Times, serif;
        text-align: center;
        max-width: 700px; /* Ajusta el ancho máximo según tus necesidades */
        margin: 0 auto; /* Esto centrará horizontalmente el div */
        padding: 20px; /* Añade un espacio interno para mejorar el aspecto */
        border: 1px solid #ccc; /* Añade un borde para mayor claridad */
        border-radius: 8px; /* Añade bordes redondeados */
    }

    
</style>
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
