<html>
    <body>
        <h1>Lo mismo que en la respuesta plana, pero mas lindo (en HTML).</h1>
        <h3>Ahh, me pasaste {{$id}}</h3>
        @if ($nombre)
        <p>Me pasaste como nombre {{$nombre}}</p>
        @else
        <p>Probar pasar por parametro get el nombre (?nombre=xxxx)</p>
        @endif
    </body>
</html>
