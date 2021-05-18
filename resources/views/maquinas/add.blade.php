@extends('layout')

@section('title', 'Añadir máquina')

@section('contenido')
    <h1>Añadir máquina</h1>
    <form method="post" action="{{--{{ route('usuarios.store')}}--}}">

        @include('maquinas.form'/*, ['user' => new App\User]*/)
        <input class="btn btn-primary" type="submit" value="Guardar máquina">
        <input class="btn btn-primary" type="submit" value="Volver">
    </form>

@endsection
