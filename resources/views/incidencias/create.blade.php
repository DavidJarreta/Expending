@extends('layout')

@section('title', 'Crear incidencia')

@section('contenido')
    <h1>Incidencia</h1>
    <form method="post" action="{{--{{ route('usuarios.store')}}--}}">

        @include('incidencias.form'/*, ['user' => new App\User]*/)
        <input class="btn btn-primary" type="submit" value="Guardar incidencia">
        <input class="btn btn-primary" type="submit" value="Volver">
    </form>

@endsection
