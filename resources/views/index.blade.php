<!DOCTYPE html>
<html lang="es">

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
    <a class="navbar-brand" href="#"><strong>HPlastic</strong></a>
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

  <div id="intro" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button data-bs-target="#intro" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button data-bs-target="#intro" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button data-bs-target="#intro" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    <style>
      .c-item {
        height: 310px;
      }

      .c-img {
        height: 100%; 
        object-fit: cover;
        filter: brightness(0.6);
      }
      
    </style>


    <div class="carousel-inner">
      <div class="carousel-item active c-item">
        <img src="images/bolsaPareja.jpeg" class="d-block w-100 c-img" alt="...">
      </div>
      <div class="carousel-item c-item">
        <img src="images/bolsasFabrica.jpg" class="d-block w-100 c-img" alt="...">
      </div>
      <div class="carousel-item c-item">
        <img src="images/bolsaMercado.avif" class="d-block w-100 c-img" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#intro" data-bs-slide="prev">
      <span class="carousel-control-prev-icon"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#intro" data-bs-slide="next">
      <span class="carousel-control-next-icon"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>



  <div class="p-3 mb-2 card-group">
    <div class="card p-3 mb-2">
      <img src="images/bolsaMujer.jpeg" class="card-img-top" alt="..." width="50px" height="200px">
      <div class="card-body" width="50px">
        <h5 class="card-title">ELIGE TU BOLSA</h5>
        <p class="card-text">Trabajamos con bolsas de politileno de baja densidad</p>
        <p class="card-text"><small class="text-muted">DESCUENTOS HASTA UN 40%</small></p>
        <a href="#" class="btn btn-warning text-dark"><strong>CONSULTAR</strong></a>
      </div>
    </div>
    <div class="card p-3 mb-2">
      <img src="images/bolsasRollos.jpg" class="card-img-top" alt="..." width="50px" height="200px">
      <div class="card-body">
        <h5 class="card-title">$2.500</h5>
        <p class="card-text">Bolsas camisetas de baja densidad</p>
        <p class="card-text"><small class="text-muted">Envío gratis</small></p>
        <a href="#" class="btn btn-warning text-dark"><strong>CONSULTAR</strong></a>
      </div>
    </div>
    <div class="card p-3 mb-2">
      <img src="images/bolsaFondoAzul.jpeg" class="card-img-top" alt="..." width="50px" height="200px">
      <div class="card-body">
        <h5 class="card-title">$5.800</h5>
        <p class="card-text">Bolsas para envasar leña</p>
        <p class="card-text"><small class="text-muted">Envío gratis</small></p>
        <a href="#" class="btn btn-warning text-dark"><strong>CONSULTAR</strong></a>
      </div>
    </div>
  </div>

  <div class="p-3 mb-2 card-group">
    <div class="card p-3 mb-2">
      <img src="images/bolsaFull.jpeg" class="card-img-top" alt="..." width="50px" height="200px">
      <div class="card-body">
        <h5 class="card-title">$3.200</h5>
        <p class="card-text">Bolsas de residuo </p>
        <p class="card-text"><small class="text-muted">Envío gratis</small></p>
        <a href="#" class="btn btn-warning text-dark"><strong>CONSULTAR</strong></a>
      </div>
    </div>
    <div class="card p-3 mb-2">
      <img src="images/BolsaFondoAmarillo.jpeg" class="card-img-top" alt="..." width="50px" height="200px">
      <div class="card-body">
        <h5 class="card-title">$6.200</h5>
        <p class="card-text">Bolsas para envasar tierra, para viveros</p>
        <p class="card-text"><small class="text-muted">Envío gratis</small></p>
        <a href="#" class="btn btn-warning text-dark"><strong>CONSULTAR</strong></a>
      </div>
    </div>
    <div class="card p-3 mb-2">
      <img src="images/bolsasNudo.jpeg" class="card-img-top" alt="..." width="50px" height="200px">
      <div class="card-body">
        <h5 class="card-title">$4.600</h5>
        <p class="card-text">Bolsas para envasar escombros, para corralones</p>
        <p class="card-text"><small class="text-muted">Envío gratis</small></p>
        <a href="#" class="btn btn-warning text-dark"><strong>CONSULTAR</strong></a>
      </div>
    </div>
  </div>

  <style>
  .container-boton{
    background-color: #2e6329;
    border:  1px solid #fff;
    position: fixed;
    z-index: 999;
    border-radius: 50%;
    bottom: 20px;
    right: 25px;
    padding: 20px;
    transition: ease 0.3s;
    animation: efecto 1.2s infinite;
}

.container-boton :hover{
    transform: scale(1.1);
    transition: 0.3s;
}

.boton{
    width: 40px;
    transition: ease 1s;
}

@keyframes efecto{
    0%{
box-shadow: 0 0 0 0 rgba(0, 0, 0, 0.85);
    }
    100%{
        box-shadow: 0 0 0 25px rgba(0, 0, 0, 0);
    }
}
</style>






  <div class="container-boton">
<a href="https://wa.me/5491127104218?text=Hola quisiera información" target="_blank">
<img class="boton" src="images/whatsapp.avif" alt="...">
</a>
</div>


  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>


<!-- Contenido -->


<!-- Footer -->
<footer class="container-fluid bg-main bg-dark text-light">
  <div class="row text-center p-4">
    <div class="mb-3">
      <img src="{{asset('images/logo.png')}}" class="logofooter" alt="YouDevs logo " width="120" id="logofooter">
    </div>
    <div id="col-md-10">
      <a href="https://www.facebook.com/youdevs">
        <img src="{{asset('images/facebook.png')}}" class="img-fluid" width="40px" alt="facebook youdevs">
      </a>
      <a href="https://www.instagram.com/youdevs">
        <img src="{{asset('images/instagram.png')}}" class="img-fluid" width="40px" alt="instagram youdevs">
      </a>
      <a href="https://www.youtube.com/c/YouDevsOficial">
        <img src="{{asset('images/youtube.png')}}" class="img-fluid" width="40px" alt="youtube youdevs">
      </a>
      <p class="mt-3">Copyright © 2020 YouDevs, Blog. <br> Todos los derechos reservados.</p>
    </div>
  </div>
</footer>



<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js" integrity="sha384-oesi62hOLfzrys4LxRF63OJCXdXDipiYWBnvTl9Y9/TRlw5xlKIEHpNyvvDShgf/" crossorigin="anonymous"></script>
</body>

</html>