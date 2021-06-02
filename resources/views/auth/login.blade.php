@extends('layout')

@section('title', 'Iniciar sesión')

@section('contenido')
        <h1>Iniciar sesión</h1>
        <form class="form-inline" method="post" action="{{route('login')}}">
            {!! csrf_field() !!}
            <input class= "form-control" type="email" name="email" placeholder="Email"><br><br>
            <input class= "form-control" type="password" name="password" placeholder="Password"><br><br>
            <input class= "btn btn-primary" type="submit" value="Entrar">
        </form>
        <br>
@stop
