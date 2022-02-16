@extends('layouts.master')
@section('content')
    <h1>Añadir tareas :</h1>
    <div class="d-flex justify-content-center text-center mt-5">
    <div style="border: 2px solid black; width: 300px;  text-align: center;background-color: white;">
        <h2>Añadir Task</h2>
        <form method="post" action="/task/crear">
            {{ csrf_field() }}
            <p>Nombre de tarea :</p>
            <input type="text" name="nombreTarea">
            <p>Descripcion :</p>
            <input type="textarea" name="texto">
            <button>Enviar</button>
        </form>
        
    </div>
    
</div>
<div class="row d-flex justify-content-center">
    <div class="col-6 bg-danger">
    {{ $error }}
    </div>
        
    </div>
@endsection