
@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Actualizacion de Programas</h1>
    
@stop

@section('content')
    <form action="{{url('/programas/editar', $programa->codprograma)}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="cod_programa" class="form-label">Codigo Programa</label>
            <input type="text" class="form-control" id="cod_programa" name="cod_programa" value="{{$programa->codprograma}}">
        </div>
        <div class="mb-3">
            <label for="nom_programa" class="form-label">Nombre programa</label>
            <input type="text" class="form-control" id="nom_programa" name="nom_programa" value="{{ $programa->nomprograma }}">
        </div>

        <div class="mb-3">
            <label for="nom_facultad" class="form-label">Nombre Facultad</label>
            <select class="form_select" arial-label="Default select example" name="facultades">
            @foreach($facultad as $f)
                <option value="{{$f->codfacultad}}">{{$f->nomfacultad}}</option>
            @endforeach
            </select>            
        </div>
        
        <button type="submit" class="btn btn-success">Editar</button>
    </form>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop