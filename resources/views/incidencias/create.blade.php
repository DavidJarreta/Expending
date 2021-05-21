@extends('layout')

@section('title', 'Crear incidencia')

@section('contenido')
    <form method="post" action="{{--{{ route('usuarios.store')}}--}}">

        @include('incidencias.form'/*, ['user' => new App\User]*/)
        <input class="btn btn-primary" type="submit" value="Guardar incidencia">
        <input class="btn btn-primary" type="submit" value="Volver">
    </form>

@endsection
