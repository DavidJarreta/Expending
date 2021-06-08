@extends('layout')

@section('title', 'Crear albarán')

@section('contenido')
    <form method="post" action="{{ route('createAlbaran') }}">
        @csrf
        @include('albaranes.form')
        <input class="btn btn-primary" type="submit" value="Guardar datos">
        <a href="listaAlbaranes" class="btn btn-primary">Volver</a>
    </form>

@endsection
