<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Editar punto de reciclaje</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">Puntos de reciclaje <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/recolectores">Recolectores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
    </nav>

    <div class="row col-lg-12">
        <div class="form-group m-2">
            <form action="/edicionPunto" method="post">
            @csrf
            <input type="hidden" name="id" value="{{$punto->id}}">
            <div class="form-group">
                <label for="tipo_basura">Tipo de basura:</label>
                <input type="text" name="tipo_basura" value="{{$punto->tipo_basura}}">
            </div>
            <div class="form-group">
                <label for="direccion">Direccion:</label>
                <input type="text" name="direccion" value="{{$punto->direccion}}">
            </div>
            <div class="form-group">
                <label for="hora_apertura">Hora de Apertura:</label>
                <input type="time" name="hora_apertura" value="{{$punto->hora_apertura}}">
                <!--<input type="number" name="horaAp" id="">-->    
            </div>
            <div class="form-group">
                <label for="hora_cierre">Hora de Cierre:</label>
                <input type="time" name="hora_cierre" value="{{$punto->hora_cierre}}">
                <!--<input type="number" name="horaCierre" id="">-->    
            </div>

            <div class="form-group">
                <input name="guardar" id="" class="btn btn-primary" type="submit" value="Guardar">
            </div>
            </form>
        </div>
    </div>
    </body>
</html>
