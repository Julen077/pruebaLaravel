@extends('layouts.master')
@section('content')
    <div class="d-flex justify-content-center text-center">
        <div class="d-flex flex-column" style="border: 2px solid black; width: 300px; text-align: center; background-color: white;">
            <h3>Lista de Tareas</h3>
            <br>
            <table class="table table-striped">
                <tr>
                    <td><b>Nombre</b></td>
                    <td><b>Descripcion</b></td>
                    <td><b>Eliminar</b></td>
                @if(count($tareas) > 0)
                                @foreach($tareas as $tarea)
                                <tr>
                                    <td>{{ $tarea->nombreTarea }}</td>
                                    <td>{{ $tarea->campoTexto }}</td>
                                    <td>
                                        <form method="POST" action="/task/eliminar/{{$tarea->id}}">
                                            {{ @csrf_field() }}
                                            @method('delete')
                                            <input type="submit" style="background-color:aqua;" value="X"/>
                                        </form>
                                    </td>
                                </tr>
                                @endforeach
                            @endif
            </table>
            
        </div>
    </div>
    @endsection