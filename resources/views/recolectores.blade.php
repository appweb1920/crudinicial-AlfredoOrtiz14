<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Recolectores</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/puntos">Puntos de reciclaje <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item active">
                <a class="nav-link" href="/recolectores">Recolectores</a>
            </li>
        </ul>
    </nav>

    <div class="row col-lg-12">
        @if((Auth::user()->tipo == '1'))
        <div class="col-lg-4">
            <div class="form-group m-2">
                <form action="/nuevoRecolector" method="post">
                @csrf
                <div class="form-group">
                    <label for="name">Nombre:</label>
                    <input type="text" name="nombre" id="">
                </div>
                <div class="form-group">
                    <label for="dias_recoleccion">Dias de recolección:</label>
                    <input type="text" name="dias_recoleccion" id="">
                </div>
                <div class="form-group">
                    <input name="guardar" id="" class="btn btn-primary" type="submit" value="Guardar">
                </div>
                </form>
            </div>
        </div>
        @endif

        <table class="table table-striped mt-2 col-lg-8">
            <thead>
                <tr class="table-primary">
                <th scope="col">Nombre</th>
                <th scope="col">Dias de recoleccion</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @if(!is_null($recolectores))
                    @foreach($recolectores as $r)
                    
                    <tr>
                    <th scope="row">{{$r->nombre}}</th>
                    <td>{{$r->dias_recoleccion}}</td>

                    <td>
                        @if((Auth::user()->tipo == '1'))
                        <a href="/editaRecolector/{{$r->id}}">Editar</a>
                        <a href="/borraRecolector/{{$r->id}}">Borrar</a>
                        @endif
                        <a href="/relacionarPunto/{{$r->id}}">Relacionar Punto</a>
                    </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    </body>
</html>
