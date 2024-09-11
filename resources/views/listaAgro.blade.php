<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h3>Lista de EStudiantes Del Centro A gropecuario</h3>


    @if ($usuarios->isEmpty())
    <p> No han ingresado estudiantes</p>
    @else<table border="1">
        <thead>
            <tr>
                <th>Codigo de barras</th>
                <th>Nombre</th>
                <th>Numero de Id</th>
                <TH>Centro</TH>
            </tr>
        </thead>
            <tbody>
                @foreach($usuarios as $usuario)
                    <tr>
                        <td>{{$usuario->codigo_barras}}</td>
                        <td>{{$usuario->nombre}}</td>
                        <td>{{$usuario->numeroId}}</td>
                        <td>{{$usuario->centro}}</td>
                        <td>{{$fechaHora}}</td>
                    </tr>
                @endforeach
            </tbody>
    @endif
</body>
</html>