
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace al archivo CSS de Bootstrap a través de CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <div class="container-fluid">
        <div class="row">
                <img src={{asset('Img/logo-ministerio-del-trabajo.jpg')}} style="width: 300px; align-items: start; margin-right: 400px;">
                <img src={{asset('Img/Logo_Biblio.png')}} style="width: 300px; margin-left: 500px; align-items: end;">
          </div>
      </div>
      
    <title>Registro</title>
</head>
<body>
  
    
    <!-- Contenido principal -->
 
    <div class=" container-fluid"> 
        <div class="row" style="color: black; margin-top: 100px; margin-right: 100px;margin-left: 100px; margin-bottom: 100px;">
            <div class="col " style="color: black;">
                <h2 style="font-size: large; margin-left: 100px; margin-right: 100px; ">Biblioteca del centro Agropecuario y centro Teleinformatico y Produccion industrial</h2>
            </div>
        </div>
        <div class="row">
            <p style="margin-left: 300px; margin-right: 100px; "> Esta es la bibliteca del centro Agropecuario y centro Teleinformatico y produccion industrial, aqui vas a encontrar nuestras colecciones de libros, la agenda cultural y la sala de internet y podras registrar tu ingreso. Disfruta  </p>
        </div>


    </div>


    <div class="container mt-5">
      
            <img src={{asset('Img/logoSena.png')}} class="card-img-top card-image" alt="Imagen en el borde" style="width: 80px; height: 55px; margin-left: 600px; margin-right:  550px; margin-top: 100px;">
       
            <div class="card p-4" style="margin-left: 425px; margin-right: 425px;">
                    <h4 class="mb-3"  style="margin-left: 50px; margin-right: 50px;"> Ingreso a Biblioteca digital </h4>
                <form method="POST" action="{{route('login')}}">
                    @csrf
                    <div class="row">
                        <label for='numeroId'>ingresa tu numero de identificacion</label>
                        <input id="numeroId" type="text" name="numeroId" required autofocus>
                    </div>
                    <div class="row">
                        <label for="password"> contraseña</label>
                        <input id="password" type="password" name="password" required>
                    </div>
                    <button type="submit"> Ingresar  </button>
            </div>
            @if ($errors->any())
             <div> 
                <ul> 
                    @foreach ($errors->all() as $error)
                    <li>{{$error}}</li>
                    @endforeach
                </ul>
             </div>
            @endif
    </div>
    </body>
</html>