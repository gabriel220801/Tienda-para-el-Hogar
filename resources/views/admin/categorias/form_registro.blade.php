

@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Registro de Programas</h1>
    
@stop

@section('content')

    <form action="{{url('/programas/registrar')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cod_programa" class="form-label">Código Programa</label>
            <input type="text" class="form-control" id="cod_programa"  name="cod_programa" >
        </div>
        <div class="mb-3">
            <label for="nom_programa" class="form-label">Nombre Programa</label>
            <input type="text" class="form-control" id="nom_programa" name="nom_programa">
        </div>

        <div class="mb-3">
            <label for="facultad" class="form-label">Facultad</label>
            <select class="form-control" aria-label="Facultades" name="facultad">
                @foreach ($query as $q)
                    <option value="{{$q->codfacultad}}">{{$q->nomfacultad}}</option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Registrar</button>
    </form>



@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop