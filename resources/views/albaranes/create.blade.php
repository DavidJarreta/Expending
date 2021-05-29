@extends('layout')

@section('title', 'Crear albarán')

@section('contenido')
    <form method="post" action="{{ route('createAlbaran') }}">

        @include('albaranes.form')
        <input class="btn btn-primary" type="submit" value="Guardar datos">
        <input class="btn btn-primary" type="submit" value="Volver">
    </form>

@endsection
