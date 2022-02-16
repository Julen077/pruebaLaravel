@extends('layouts.master')
@section('content')

    <h1>Buscar tareas :</h1>
    <div class="d-flex justify-content-center text-center mt-5">
    <div style="border: 2px solid black; width: 300px; height : 150px; text-align: center;background-color: white;">
        <h2>Busca:</h2>
        <form method="post" action="/task/buscar">
            {{ csrf_field() }}
            <input type="text" name="nombreTarea">
            <button>Enviar</button>
        </form>
    </div>
    
</div>
<div class="d-flex justify-content-center">
    <div class="col-6">
    <table class="table table-striped">
        <tr>
            <th>Id</th>
            <th>Nombre tarea</th>
            <th>Descripción</th>
        </tr>
            @foreach($tareas as $tarea)
            <tr>
                <td>{{ $tarea->id }}</td>
                <td>{{ $tarea->nombreTarea }}</td>
                <td>{{ $tarea->campoTexto }}</td>
            </tr>
            @endforeach
    </table>
    </div>
   
    </div>
@endsection