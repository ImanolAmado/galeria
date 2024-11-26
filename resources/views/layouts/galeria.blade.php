<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>@yield('tituloWeb')</title>
    @yield('enlaceCSS')   
</head>
<body>
<header class="cabecera">   
    <img src="{{asset('images/logo.jpg')}}" height="150px"></img>
    <h1>Tú galería de arte moderno</h1>
</header>
<div class="contenido">
    @yield('contenido')
</div>
<footer class="mifooter">
    <p>The Modern Art Gallery Company<br>
    Avd de la Libertad 44, bajo - 20830 - Donostia (Gipuzkoa)<br>
    Todos los derechos reservados - 2024</p>    
</footer>
</body>
</html>
