<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>

    <!--Icono de pestaña-->
    <link rel="icon" href="./Img/html-5.png">
    
    <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    @livewireStyles
</head>
<body class="bg-light">
    <div class="container shadow bg-white">
        <div class="row">
            <div class="col-sm-12">
                <h3>
                    <a href="http://127.0.0.1:8000/" target="_self">TAREAS A REALIZAR</a>
                </h3>
            </div>
            <div class="col-sm-12">
                <a href="{{ route('tarea.create') }}" class="btn btn-link">CREAR NUEVA TAREA</a>
                <a href="{{ route('tarea.index') }}" class="btn btn-link">LISTAR TAREAS</a>
            </div>
            <div class="col-sm-12">
                @yield('contenido')
            </div>
        </div>
    </div>
    @livewireScripts
</body>
</html>