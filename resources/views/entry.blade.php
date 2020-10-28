@extends('main')

@section('content')
  <div class="logo-wrapper">
    <img class="logo" src="/img/logo.png" alt="Logo" id="logoentry">
  </div>
  <nav class="navbar navbar-light bg-light" id="barrabusqueda">
    <form class="form-inline" action='/productoencontrado' method=GET>
      <input class="form-control mr-sm-2" type="search" name='busqueda' placeholder="Ejemplo de producto..." aria-label="Search">
      <button class="btn btn-primary" type="submit">Buscar</button>
    </form>
  </nav>
    @include('nav')
    </header>
    <br>
    {{-- <div class="container"> --}}
        <div id="myCarousel" class="carousel slide" data-ride="carousel">

        <!-- Wrapper for slides -->

          <div class="carousel-inner" >
              <div class="item active">
                <img src="/img/carrusel1.jpg" alt="" style="width:100%;">
              </div>

              <div class="item">
                <img src="/img/carrusel2.jpg" alt="" style="width:100%;">
              </div>

              <div class="item">
                <img src="/img/carrusel3.jpg" alt="" style="width:100%;">
              </div>

              <div class="item">
                <img src="/img/carrusel4.jpg" alt="" style="width:100%;">
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#myCarousel" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right"></span>
              <span class="sr-only">Next</span>
            </a>
        </div>
    {{-- </div> --}}
    {{-- <div class="carrusel">
      <img src="" alt="">
    </div> --}}
@endsection
