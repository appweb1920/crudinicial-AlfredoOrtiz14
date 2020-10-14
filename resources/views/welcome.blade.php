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
            <li class="nav-item active">
                <a class="nav-link" href="/">Puntos de reciclaje <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Recolectores</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
        </ul>
    </nav>

    <div class="row col-lg-12">
        <div class="col-lg-4">
            <div class="form-group m-2">
                <form action="/reciclaje" method="post">
                @csrf
                <div class="form-group">
                    <label for="tipo_basura">Tipo de basura:</label>
                    <input type="text" name="tipo_basura" id="">
                </div>
                <div class="form-group">
                    <label for="direccion">Direccion:</label>
                    <input type="text" name="direccion" id="">
                </div>
                <div class="form-group">
                    <label for="hora_apertura">Hora de Apertura:</label>
                    <input type="time" name="hora_apertura" id="">
                    <!--<input type="number" name="horaAp" id="">-->    
                </div>
                <div class="form-group">
                    <label for="hora_cierre">Hora de Cierre:</label>
                    <input type="time" name="hora_cierre" id="">
                    <!--<input type="number" name="horaCierre" id="">-->    
                </div>

                <div class="form-group">
                    <input name="guardar" id="" class="btn btn-primary" type="submit" value="Guardar">
                </div>
                </form>
            </div>
        </div>

        <table class="table table-striped mt-2 col-lg-8">
        <thead>
            <tr class="table-primary">
            <th scope="col">Tipo de Basura</th>
            <th scope="col">Direccion</th>
            <th scope="col">Hora de apertura</th>
            <th scope="col">Hora de cierre</th>
            <th scope="col"></th>
            </tr>
        </thead>
        <tbody>
            @if(!is_null($puntos))
                @foreach($puntos as $p)
                
                <tr>
                <th scope="row">{{$p->tipo_basura}}</th>
                <td>{{$p->direccion}}</td>
                <td>{{$p->hora_apertura}}</td>
                <td>{{$p->hora_cierre}}</td>
                <td>
                <a href="/editaPunto/{{$p->id}}">Editar</a>
                <a href="/borraPunto/{{$p->id}}">Borrar</a>
                </td>
                </tr>
                @endforeach
            @endif
        </tbody>
        </table>
    </div>
    </body>
</html>
