<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PlastBags</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/styles.css')}}">
</head>

<body>






<nav class="navbar navbar-expand-lg navbar-light bg-warning">
  <div class="container-fluid">
    <a class="navbar-brand" href="/"><strong>HPlastic</strong></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll" aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarScroll">
      <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Nosotros</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
           Productos
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
            <li><a class="dropdown-item" href="#">Bolsas de residuo</a></li>
            <li><a class="dropdown-item" href="#">Bolsas de consorcio</a></li>
            <li><a class="dropdown-item" href="#">Bolsas para envasar escombros, para corralones</a></li>
            <li><a class="dropdown-item" href="#">Bolsas para envasar leña</a></li>
            <li><a class="dropdown-item" href="#">Bolsas patológicas</a></li>
            <li><a class="dropdown-item" href="#">Bolsas camisetas de baja densidad</a></li>
            <li><a class="dropdown-item" href="#">Bolsas patológicas</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#"><strong>Lo más vendido...</strong></a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link enabled" href="/contacto" tabindex="-1" aria-disabled="true">Contacto</a>
        </li>
      </ul>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<div class="text-center mt-4">
<h4>ENVIANOS TU CONSULTA</h4>
</div>


    <div class="d-flex flex-column mb-3">

        <input type="text" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Nombre">

        <input type="number" class="form-control mt-2" id="exampleFormControlInput1" placeholder="Teléfono">
    </div>

    <div class="d-flex flex-column mb-3">

        <input type="email" class="form-control col-4 mt-2" id="exampleFormControlInput1" placeholder="name@example.com">

        <input type="text" class="form-control col-4 mt-2" id="exampleFormControlInput1" placeholder="Empresa">
    </div>


    <div class="mb-3">
        <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Mensaje" rows="3"></textarea>
    </div>
    </div>

    <button type="button" class="btn btn-success p-2">Enviar</button>

</body>

</html>