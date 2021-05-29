@extends('layout')

@section('title', 'Crear alimento')

@section('contenido')
    <h1>Crear alimento</h1>
    <form method="post" action="{{ route('añadirAlimento')}}"> 
        @csrf
        <p>
            <label for="naNombreme">Nombre
                <input class="form-control" type="text" name="Nombre" id="Nombre">
                {{-- !! $errors->first('location','<span class=error>:message</span>')!! --}}
            </label>
        </p>
        <p>
            <label for="Precio">Precio
                <input class="form-control" type="text" name="Precio" id="Precio">
                {{-- !! $errors->first('location','<span class=error>:message</span>')!!--}}
            </label>
        </p>
        <input class="btn btn-primary" type="submit" value="Guardar alimento">
        <input class="btn btn-primary" type="submit" value="Volver">
       
    </form>

@endsection