@extends('layout')

@section('title', 'Crear usuario')

@section('contenido')
    <h1>Crear nuevo usuario</h1>
    <form method="post" action="´{{--{{ route('usuarios.store') --}}}}">

        @include('users.form'/*, ['user' => new App\User]*/)
        <input class="btn btn-primary" type="submit" value="Guardar">
        <input class="btn btn-primary" type="submit" value="Volver">
    </form>

@endsection


