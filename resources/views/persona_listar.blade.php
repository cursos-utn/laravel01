<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <h1>Personas</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <a href="persona/agregar" class="btn btn-primary">Agregar</a>
            <table class="table table-striped table-condensed">
                <thead>
                    <tr>
                        <th>Nombre</th>
                        <th>Teléfono</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                @foreach ($listado as $unaPersona)
                    <tr>
                        <td>{{$unaPersona->nombre}}</td>
                        <td>{{$unaPersona->telefono}}</td>
                        <td>
                            <a href="persona/editar/{{$unaPersona->id}}">Editar</a> | 
                            <a href="persona/borrar/{{$unaPersona->id}}">Borrar</a>

                        </td>
                    </tr>
                @endforeach
            </table>

        </div>

    </body>
</html>
