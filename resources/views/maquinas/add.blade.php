@extends('layout')

@section('title', 'Añadir máquina')

@section('contenido')
    <form method="post" action="{{ route('añadirMaquina')}}"> 
        @csrf
        @include('maquinas.form')
        <input class="btn btn-primary" type="submit" value="Guardar máquina">
        <a href="listaAlbaranes" class="btn btn-primary">Volver</a>
    </form>

@endsection
