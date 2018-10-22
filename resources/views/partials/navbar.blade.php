<nav class=" clase row nav-color navbar navbar-expand-lg navbar-light bg-light">
  <!--Logo-->
  <div class="logo col-lg-2 col-md-2 col-sm-5 col-xs-4">
    <a href="/home"><img src="images/LOGO.png" alt=""></a>
  </div>

  <div class="clase col-lg-8 col-md-8 col-sm-5 col-xs-4">
    <!--Menu Hamburguesa-->
      <button class="botones-navbar navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
          <li class="nav-item active">
            <a class="nav-link fuente" href="/home">HOME <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link fuente" href="/products.product">SHOP ONLINE</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fuente" href="">TIENDAS</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fuente" href="http://stylescout.blogspot.com/">BLOG</a>
          </li>
          <li class="nav-item">
            <a class="nav-link fuente" href="faq">PREGUNTAS FRECUENTES</a>
          </li>
        </ul>
      </div>
      <!--Boton Buscar-->
      <button type="button" class="icono-banner btn btn-light">
        <img src="images/lupaLog.png" alt="">
      </button>
      <!--Boton Carrito-->
      <button type="button" class="icono-banner btn btn-light">
        <img src="images/carritoLog.png" alt="">
      </button>
      {{-- <!--Boton INICIAR SESION-->
      <button type="button" class="icono-banner btn btn-light"  data-whatever="@getbootstrap">
        <p>Login</p>
      </button>
      <!--Boton REGISTRARSE-->
      <button type="button" class="icono-banner btn btn-light"  data-whatever="@getbootstrap">
        <p>Registrate</p>
      </button> --}}
      @if (Route::has('login'))
          <div class="top-right links">
              @auth
                  <a href="{{ url('/home') }}">Home</a>
              @else
                  <a href="{{ route('login') }}">Login</a>
                  <a href="{{ route('register') }}">Register</a>
              @endauth
          </div>
      @endif
  </div>
</nav>
