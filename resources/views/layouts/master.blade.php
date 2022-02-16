<!doctype html>
    <html lang="{{ app()->getLocale() }}">
    <head>
        <title>Tareas</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    </head>
    <style>
        body{
            text-align: center;
            justify-content: center;
            background-color: lightblue;
        }
    </style>
    <body>
        <a href="/" style="text-decoration: none"><h1>Tareas</h1></a>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <a href="/task/ensenar" style="text-decoration: none">Lista tareas</a><a> / </a>
                <a href="/task/crear" style="text-decoration: none">Crear tareas</a><a> / </a>
                <a href="/task/buscar" style="text-decoration: none">Buscar tareas</a><a> / </a>
            @section('content')
            @show
            </div>
        </div>
    </body>
    </html>
