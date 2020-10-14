<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Punto de reciclaje</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="#">Puntos de reciclaje <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="#">Recolectores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
    </nav>

    <div class="form-group m-2">
        <form action="" method="post">
        @csrf
        <div class="form-group">
            <label for="tipoBasura">Tipo de basura:</label>
            <input type="text" name="tipoBasura" id="">
        </div>
        <div class="form-group">
            <label for="direccion">Direccion:</label>
            <input type="text" name="direccion" id="">
        </div>
        <div class="form-group">
            <label for="horaAp">Hora de Apertura:</label>
            <input type="number" name="horaAp" id="">    
        </div>
        <div class="form-group">
            <label for="horaCierre">Hora de Cierre:</label>
            <input type="number" name="horaCierre" id="">    
        </div>

        <div class="form-group">
            <input name="guardar" id="" class="btn btn-primary" type="submit" value="Guardar">
        </div>
        </form>
    </div>
    
    <div>
        @if(!is_null($alumnos))
            @foreach($alumnos as $a)
                <p>{{$a->nombre}} {{$a->apellido}}</p>
                <a href="/edita/{{$a->id}}">Editar</a>
                <a href="/borra/{{$a->id}}">Borrar</a>
                <a href="/materia/{{$a->id}}">Ver Materias</a>
            @endforeach
        @endif
        </div>

    </body>
</html>
