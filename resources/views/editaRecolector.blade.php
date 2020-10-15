<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar recolector</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/">Puntos de reciclaje <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/recolectores">Recolectores</a>
            </li>
        </ul>
    </nav>

    <div class="row col-lg-12">
        <div class="form-group m-2">
            <form action="/edicionRecolector" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$recolector->id}}">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" value="{{$recolector->nombre}}">
            </div>
            <div class="form-group">
                <label for="dias_recoleccion">Dias de recolección:</label>
                <input type="text" name="dias_recoleccion" value="{{$recolector->dias_recoleccion}}">
            </div>

            <div class="form-group">
                <input name="guardar" id="" class="btn btn-primary" type="submit" value="Guardar">
            </div>
            </form>
        </div>
    </div>
    </body>
</html>
