@extends('layout')

@section('title', 'Albaranes')

@section('contenido')
    <h1>Lista de albaranes</h1>
        
        <a class="btn btn-primary pull-right" href="{{route('formularioCreateAlbaran')}}">Crear albaran</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID albarán</th>
            <th>Estado máquina</th>
            <th>Fecha</th>
            <th>Dinero</th>
            <th>Contador</th>
            <th>Nombre usuario</th>
            <th>Id máquina</th>
            <th>Alimentos introducidos</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($albaranes as $albaran)
                <tr>               
                    <td>{{ $albaran->Id_albaran}}</td>
                    <td>{{ $albaran->Estado_maquina}}</td>
                    <td>{{ $albaran->Fecha}}</td>
                    <td>{{ $albaran->Dinero_recaudado}}</td>
                    <td>{{ $albaran->Contador}}</td>
                    <td>{{ $albaran->nombre[0]->name }}</td>
                    <td>{{ $albaran->Id_maquina}}</td>
                    <td>
                        <ul>
                            @foreach ($albaran->alimento as $alimento)
                                <li>{{ $alimento->Nombre }}</li>
                            @endforeach
                        </ul>
                    <td>                    
                    <td>
                        <a class="btn btn-success btn-xs" href="{{route('formularioMeterAlimento', $albaran->Id_albaran)}}">Añadir alimento</a>

                        @if(Auth::check() && Auth::user()->type_worker === "admin")
                            <a class="btn btn-info btn-xs" href="{{route('editAlbaran', $albaran->Id_albaran)}}">Editar</a>

                            <form  style="display:inline"  method="POST" action ="{{ route('deleteAlbaran', $albaran->Id_albaran) }}">
                                @method('DELETE')
                                @csrf
                                <button class ="btn btn-danger btn-xs" type="submit">Eliminar</button>
                            </form>
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@stop
