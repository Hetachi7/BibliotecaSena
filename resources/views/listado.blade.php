<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <h2>listado de estudiantes</h2>

    @if ($user->isEmpty())
        <p> No han ingresado estudaintes</p>
    @else 
        <table border ="1">
        <thead>
            <tr>
                <th>Codigo de barras</th>
                <th> Nombre</th>
                <th>numero de ID</th>
                <th>Centro</th>
            </tr>
        </thead>
        <tbody>
           @foreach ($uduarios as $usuario)
               <tr>
                    <td>{{$usuarios->codigo_barras}}</td>
                    <td>{{$usuarios->nombre}}</td>
                    <td>{{$usuarios->numeroId}}</td>
                    <td>{{$usuarios->centro}}</td>
           @endforeach  
        @endif  
</body>
</html>