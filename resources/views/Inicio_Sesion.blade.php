<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Enlace al archivo CSS de Bootstrap a través de CDN -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  
    <title>Registro</title>
</head>
<body>

    
    <!-- Contenido principal -->
 
    <div class=" container-fluid"> 
        <div class="row" style="color: black; margin-top: 100px; margin-right: 100px;margin-left: 100px; margin-bottom: 100px;">
            <div class="col " style="color: black;">
                <h2 style="font-size: x-large; margin-left: 400px; margin-right: 350px; ">Biblioteca del centro Agropecuario y centro Teleinformatico y Produccion industrial</h2>
            </div>
        </div>
        <div class="row">
            <p style="margin-left: 300px; margin-right: 100px; "> Lorem ipsum, dolor sit amet consectetur adipisicing elit. Aliquam esse sit distinctio hic ipsa, tenetur voluptatem id possimus, perferendis aliquid maxime vero error, sint eligendi. Provident cum nisi nobis voluptatibus.</p>
        </div>


    </div>


    <div class="container mt-5">
      
            <img src="/resources/public/Img/logoSena.png" class="card-img-top card-image" alt="Imagen en el borde" style="width: 80px; height: 55px; margin-left: 600px; margin-right:  550px; margin-top: 100px;">
       
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
                        <input id="password" type="text" name="numeroId" required>
                    </div>
                    <button type="submit"> Ingresar  </button>
            </div>
        
    </div>
    </body>
</html>