

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<div class="centrado">
<h1>Registro de Categorias</h1>
    <form action="{{ url('/admin/categorias/registrar') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="id_categoria" class="form-label">Codigo Categoria</label>
            <input type="text" class="form-control" id="id_categoria"  name="id_categoria" >
        </div>
        <div class="mb-3">
            <label for="nom_categoria" class="form-label">Nombre Categoria</label>
            <input type="text" class="form-control" id="nom_categoria" name="nom_categoria">
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