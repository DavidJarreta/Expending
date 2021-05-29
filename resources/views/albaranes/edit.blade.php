@extends('layout')

@section('title', 'Editar albarán')

@section('contenido')
    <h1>Datos del albarán</h1>
    <form method="post" action="´{{ route('formularioCreateAlbaran') }}">

        @include('albaranes.form')
        <input class="btn btn-primary" type="submit" value="Guardar datos">
        <input class="btn btn-primary" type="submit" value="Volver">
    </form>

@endsection
