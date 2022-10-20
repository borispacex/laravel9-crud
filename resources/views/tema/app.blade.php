<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title')</title>
        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        @livewireStyles
    </head>
    <body class="bg-light">
        <div class="container shadow bg-white">
            <div class="col-sm-12">
                <h1>Laravel CRUD</h1>
            </div>
            <div class="col-sm-12">
                <a href="{{ route('tarea.create') }}" class="btn btn-link">Crear nueva tarea</a>
                <a href="{{ route('tarea.index') }}" class="btn btn-link">Listar tareas</a>
            </div>
            <div class="col sm-12">
                @yield('contenido')
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
        @livewireScripts
    </body>
</html>
