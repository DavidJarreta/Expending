@extends('layout')

@section('title', 'Albaranes')

@section('contenido')
    <h1>Lista de albaranes</h1>
    <a class="btn btn-primary pull-right" href="{{route('añadirMaquina')}}">Añadir máquina</a>

    <table class="table">
        <thead>
        <tr>
            <th>ID máquina</th>
            <th>Estado</th>
            <th>Fecha</th>
            <th>Dinero</th>
            <th>Contador</th>
        </tr>
        </thead>
        <tbody>{{--
        @foreach($messages as $message)
            <tr>
                <td>{{ $message->id }}</td>
                @if($message->user_id)
                    <td>
                        <a href="{{ route('usuarios.show', $message->user_id) }}">
                            {{ $message->user->name }}
                        </a>
                    </td>
                    <td>{{ $message->user->email }}</td>
                @else
                    <td>{{ $message->nombre }}</td>
                    <td>{{ $message->email }}</td>
                @endif
                <td>
                    <a href="{{route('mensajes.show', $message->id)}}">{{ $message->mensaje}}</a>
                </td>
                <td>{{ $message->note ? $message->note->body : ''}}</td>
                <td>{{ $message->tags->pluck('names')->implode(', ') }}</td>--}}

                <td>
                    <a class="btn btn-info btn-xs" href="{{route('editAlbaran')}}{{-- {{route('mensajes.edit',$message->id) --}}">Editar</a>

                    <form  style="display:inline"  method="POST" action=" {{--{{route('mensajes.destroy',$message->id)--}}}}">
                        {!! csrf_field()!!}
                        {!! method_field('DELETE')!!}
                        <button class ="btn btn-danger btn-xs"type="submit">Eliminar</button>

                    </form>
                </td>{{--
            </tr>
        @endforeach--}}
        </tbody>
    </table>
@stop
