@extends('layout')

@section('title', 'Meter alimento en albarán')

@section('contenido')
    <form method="post" action="{{ route('MeterAlimento')}}">
        @csrf
        @include('alimentos.formAdd')
        
    </form>


@endsection
