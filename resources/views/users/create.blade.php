@extends('layout')

@section('title', 'Crear usuario')

@section('contenido')
    <h1>Crear nuevo usuario</h1>
    <form method="post" action="´{{--{{ route('usuarios.store') --}}}}">
        @csrf
        @include('users.form'/*, ['user' => new App\User]*/)
        <input class="btn btn-primary" type="submit" value="Guardar">
        <a href="listaAlbaranes" class="btn btn-primary">Volver</a>
    </form>

@endsection


