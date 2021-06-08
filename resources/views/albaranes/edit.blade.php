@extends('layout')

@section('title', 'Editar albarán')

@section('contenido')
    <form method="post" action="{{-- route('formularioCreateAlbaran') --}}">
        @csrf
        @include('albaranes.formEdit')
        <input class="btn btn-primary" type="submit" value="Actualizar">
        <a href="listaAlbaranes" class="btn btn-primary">Volver</a>
    </form>

@endsection
