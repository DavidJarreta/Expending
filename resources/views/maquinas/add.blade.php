@extends('layout')

@section('title', 'Añadir máquina')

@section('contenido')
    <form method="post" action="{{ route('añadirMaquina')}}"> 

        @include('maquinas.form')
        <input class="btn btn-primary" type="submit" value="Guardar máquina">
        <input class="btn btn-primary" type="submit" value="Volver">
    </form>

@endsection
