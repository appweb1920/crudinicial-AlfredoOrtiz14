<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Relacionar recolector con punto</title>

        <!-- Fonts -->
        <link href="https://stackpath.bootstrapcdn.com/bootswatch/4.5.2/flatly/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a class="nav-link" href="/puntos">Puntos de reciclaje<span class="sr-only">(current)</span></a>
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
                <form action="/nuevoDetalle" method="post">
                @csrf
                <input type="hidden" name="id_recolector" value="{{$recolector->id}}">
                <div class="form-group">
                    <label for="nombre">Nombre: {{$recolector->nombre}}</label>
                </div>
                <div class="form-group">
                    <label for="dias_recoleccion">Punto de reciclaje:</label>
                    <select name="id_punto" id="">
                        @if(!is_null($recolector))
                            @foreach($recolector->getPuntosSinRelacion() as $p) 
                            <option value="{{$p->id}}" name="id_punto">{{$p->tipo_basura}}</option>
                            @endforeach
                        @endif
                    </select>
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
                <th scope="col">Punto de reciclaje</th>
                <th scope="col"></th>
                </tr>
            </thead>
            <tbody>
                @if(!is_null($recolector))
                    @foreach($recolector->getPuntos() as $p)              
                    <tr>
                    <th scope="row">{{$recolector->nombre}}</th>
                    <td>{{$p->tipo_basura}}</td>
                    @if((Auth::user()->tipo == '1'))
                    <td>
                        @foreach($recolector->getDetalles($p->id) as $d)
                            <a href="/edicionDetalle/{{$d->id}}">Editar</a>
                            <a href="/borraDetalle/{{$d->id}}">Borrar</a>
                        @endforeach
                    </td>
                    @endif
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
    </body>
</html>
