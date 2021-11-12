<!DOCTYPE html>
<body style="background-color: lightblue;">
    
    <h1>Lista de tareas :</h1>
    <div style="border: 2px solid black; width: 300px; height : 150px; text-align: center;background-color: white;">
        <h2>Añadir Task</h2>
        <form method="post" action="/proyecto/nombreTarea">
            {{ csrf_field() }}
            <input type="text" name="nombreTarea">
            <button>Enviar</button>
        </form>
    </div>
    <br>
    <div style="border: 2px solid black; width: 300px; height : 500px; text-align: center; background-color: white;">
        <h2>Lista de Task</h2>
        <table table border="20">
            <tr>
                <td><b>Nombre</b></td>
                <td><b>Eliminar</b></td>
            @if(count($tareas) > 0)
                            @foreach($tareas as $tarea)
                            <tr>
                                <td>{{ $tarea->nombreTarea }}</td>
                                <td>
                                    <form method="POST" action="/proyecto/{{$tarea->id}}">
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
</body>
</html>