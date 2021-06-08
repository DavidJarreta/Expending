@extends('layout')

@section('title', 'Crear alimento')

@section('contenido')
    <form method="post" action="{{ route('añadirAlimento')}}">
        @csrf
        @include('alimentos.form')
        <input class="btn btn-primary" type="submit" value="Guardar alimento">
        <input class="btn btn-primary" type="submit" value="Volver">
       
    </form>

@endsection