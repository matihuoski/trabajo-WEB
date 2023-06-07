<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{asset('css/bootstrap-custom.min.css')}}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Equipos</title>
</head>

<body>
    {{-- {{dd(Request::segments())}} --}}
    <!-- barra usuario -->
    <div class="container-fluid">
        <div class="row bg-dark text-white">
            <div class="col-8">
                Bienvenido <span class="fw-bold"></span>
            </div>
            <div class="col-3 text-end d-none d-lg-block">
                
            </div>
            <div class="col-1 text-end d-none d-lg-block">
                <a href="#" class="text-white">Cerrar Sesión</a>
            </div>
        </div>
    </div>

    <!-- navbar -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="{{route('Inicio')}}">Ingreso</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('op') }}">Administrador</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('Profesor')}}">Profesor</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{route('Alumno')}}">Alumno</a>
          </li>
      </ul>
    </div>
  </div>
</nav>
    <!-- datos -->
        @yield('contenido-principal')
   
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"> </script>

</body>

</html>