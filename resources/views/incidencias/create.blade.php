@extends('layout')

@section('title', 'Crear incidencia')

@section('contenido')
    <form method="post" action="{{ route('createIncidencia') }}">

        @include('incidencias.form')
        <input class="btn btn-primary" type="submit" value="Guardar incidencia">
        <input class="btn btn-primary" type="submit" value="Volver">
    </form>

@endsection
