<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Codigo de barras</title>

    <div class="container-fluid">
        <div class="row">
                <img src="../Img/logo-ministerio-del-trabajo.jpg" style="width: 300px; align-items: start; margin-right: 400px;">
                <img src="../Img/Logo_Biblio.png" style="width: 300px; margin-left: 850px; align-items: end;">
          </div>
    </div>
</head>
<body>
    <nav>
        <a href="#">inicio </a>
        <a href="#">Biblioteca Digital </a>
        <a href="#">Colecciones</a>
        <a href="#">Eventos </a>
        <a href="#">quienes somos </a>
      
        <span></span>
      </nav>

    <h1>Buscar estudiante</h1>
    
    <form action="{{route('buscar.estudiante')}}" method="GET">
        @csrf
        <label for="codigo_barras"> Registrar</label>
        <input type="text"id="codigo_barras" name="codigo_barras" required>
        <button type="submit"> Ingresar</button>
    </form>
    @if (@isset($usuario))
        <h3>Resultado</h3>
        <p> <strong>Nombre</strong> {{$usuario->nombre}} </p>
        <p> <strong>Numero id </strong> {{$usuario->numeroId}}</p>
        <p> <strong> Centro:</strong> {{$usuario->Centro}}</p>
        <p><strong> Fecha y Hora de entrada</strong>{{$fechaHora}}</p>
        
    @endif

    @if (@isset($mensaje))
        <p> {{$mensaje}}</p>


        
    @endif
</body>

<footer style="background-color: gray;">
    <div class="container-xl" style="margin-top: 30px;">
      <h6>Servicio Nacional de Aprendizaje SENA - Dirección General</h6>
    <h6>Calle 57 No. 8 - 69 Bogotá D.C. (Cundinamarca), Colombia</h6>
    <h6>Atención presencial: lunes a viernes 8:00 a.m. a 5:30 p.m.<h6>
    <h6>Resto del país sedes y horarios Atención telefónica: lunes a viernes 7:00 a.m. a 7:00 p.m. - sábados 8:00 a.m. a 1:00 p.m</h6>
    <h6>Lineas gratuitas atención al ciudadano: Bogotá (57 1) 3430111 - Resto del país 018000 910270</h6>
    <h6>Lineas gratuitas atención al empresario: Bogotá (57 1) 3430101 - Resto del país 018000 910682</h6>
    <h6>Conmutador Nacional (57 1) 5461500 - Extensiones 12586 - 13021 - 12535 - 12542</h6>
    <h6>biblioteca.sena@misena.edu.co</h6>
    <button> Sitio STAFF</button>
    </div>
    
  </footer>
</html>