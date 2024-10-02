<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <div class="container-fluid">
        <div class="row">
                <img src={{asset('Img/logo-ministerio-del-trabajo.jpg')}} style="width: 300px; align-items: start; margin-right: 400px;">
                <img src={{asset('Img/Logo_Biblio.png')}} style="width: 300px; margin-left: 500px; align-items: end;">
          </div>
      </div>
</head>
<body>
    
    <h3>Listado de Estudaintes CTPI</h3>

  
    
    @if ($usuarios->isEmpty())
        <P>No han ingresado estudiantes</P>
    @else 
        <table border="1">
        <thead>
            <tr>
                <th> Codigo de barras</th>
                <th> Nombre</th>
                <th> Numero de Id</th>
                <th> Centro</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($usuarios as $usuario)
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