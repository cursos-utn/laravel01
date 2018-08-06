<!DOCTYPE html>
<html lang="es" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    </head>
    <body>
        <div class="container">
            <h1>Persona</h1>
            @if (count($errors) > 0)
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{$persona->id}}" />
                <div class="form-group">
                  <label for="nombre">Nombre</label>
                  <input type="nombre" class="form-control" id="nombre" name="nombre" placeholder="Nombre" value="{{$persona->nombre}}">
                </div>
                <div class="form-group">
                  <label for="telefono">Telefono</label>
                  <input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" value="{{$persona->telefono}}">
                </div>

                <button type="submit" class="btn btn-primary">Guardar</button>
                <a href="../persona">Cancelar</a>
            </form>
        </div>

    </body>
</html>
