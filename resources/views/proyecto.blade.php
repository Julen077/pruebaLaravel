<!DOCTYPE html>
<body style="background-color: lightblue;">
    
    <h1>Lista de tareas :</h1>
    <div style="border: 2px solid black; width: 300px; height : 150px; text-align: center;background-color: white;">
        <h2>Añadir Task</h2>
        <form action="/proyecto/nombreTarea">
            {{ csrf_field() }}
            <input type="text" name="nombreTarea">
            <button>Enviar</button>
        </form>
    </div>
    <br>
    <div style="border: 2px solid black; width: 300px; height : 200px; text-align: center; background-color: white;">
        <h2>Lista de Task</h2>
        <table table border="1">
            <tr>
                <td>Nombre</td>
                <td>Eliminar</td>
            </tr>
            <tr>
                <td>Task1</td>
                <td><button>X</button></td>
            </tr>
            <tr>
                <td>Task2</td>
                <td><button>X</button></td>
            </tr>
            
        </table>

    </div>
    
</body>
</html>