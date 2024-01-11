

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
        
@stop

@section('content')
<div class="centrado">
<h1>Registro de Programas</h1>
    <form action="{{ url('/admin/productos/registrar') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label for="id_producto" class="form-label">Id Producto</label>
            <input type="text" class="form-control" id="id_producto"  name="id_producto" >
        </div>
        <div class="mb-3">
            <label for="nom_producto" class="form-label">Nombre Producto</label>
            <input type="text" class="form-control" id="nom_producto" name="nom_producto">
        </div>
        <div class="mb-3">
            <label for="des_producto" class="form-label">Descripcion Producto</label>
            <input type="text" class="form-control" id="des_producto" name="des_producto">
        </div>
        <div class="mb-3">
            <label for="pre_producto" class="form-label">Precio Producto</label>
            <input type="text" class="form-control" id="pre_producto" name="pre_producto">
        </div>

        <div class="mb-3">
            <label for="id_categoria" class="form-label">Categoria</label>
            <select class="form-control" aria-label="id_categoria" name="id_categoria">
                @foreach ($registro as $c)
                    <option value="{{$c->id_categoria}}">{{$c->nom_categoria}}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="fotoproducto" class="form-label">Imagen del Producto</label>
            <input type="file" class="form-control" id="fotoproducto" name="fotoproducto">
        </div>

        <button type="submit" class="btn btn-outline-success">Registrar</button>
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