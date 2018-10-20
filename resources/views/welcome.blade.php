<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title') -- FID</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet" type="text/css">

        <!-- Google Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Lato:300" rel="stylesheet">

        <!-- Icono TAB -->
		    <link rel="shortcut icon" href="images/icono.ico">

        <!-- Styles del Welcome -->
        <style>
        html, body {
          background-color: #fff;
          color: #636b6f;
          font-family: 'Nunito', sans-serif;
          font-weight: 200;
          height: 100vh;
          margin: 0;
        }

        .full-height {
          height: 100vh;
        }

        .flex-center {
          align-items: center;
          display: flex;
          justify-content: center;
        }

        .position-ref {
          position: relative;
        }

        .top-right {
          position: absolute;
          right: 10px;
          top: 18px;
        }

        .content {
          text-align: center;
        }

        .title {
          font-size: 84px;
        }

        .links > a {
          color: #636b6f;
          padding: 0 25px;
          font-size: 12px;
          font-weight: 600;
          letter-spacing: .1rem;
          text-decoration: none;
          text-transform: uppercase;
        }

        .m-b-md {
          margin-bottom: 30px;
        }
      </style>

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    		<!-- Style CSS -->
    		<link rel="stylesheet" href="css/styles.css">


    </head>
    <body>
        {{-- <div class="flex-center position-ref full-height">
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

            <div class="content">
                <div class="title m-b-md">
                    FID
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Documentation</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div> --}}

        <!--Contenedor-->
<div class="container-fluid contenedor">
  <!--Cabecera-->
  <header class="main-header">

    <!--Menu navbar-->
    @include('partials.navbar')
    <!--Banner MOVILE-->
    <section class="banner-movile">
      <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img class="d-block w-100" src="./images/banner01.jpg" alt="First slide">
          </div>
          <div class="carousel-item">
            <img class="d-block w-100" src="./images/banner02.jpg" alt="Second slide">
          </div>
        </div>
      </div>
    </section>

    <!--Carousel-->
    <section class="banner">
          <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
              <ol class="carousel-indicators">
                  <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                  <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner">
                  <div class="carousel-item">
                    <video loop class="d-block w-100" autoplay muted plays-inline autoplay poster="posterimage.jpg" alt="First slide">
                      <source src="./images/video.mp4" type="video/mp4">
                    </video>
                  </div>
                  <div class="carousel-item">
                    <img class="d-block w-100" src="./images/banner01.jpg" alt="Second slide">
                  </div>
                  <div class="carousel-item active">
                    <img class="d-block w-100" src="./images/banner02.jpg" alt="Third slide">
                  </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                  <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                  <span class="carousel-control-next-icon" aria-hidden="true"></span>
                  <span class="sr-only">Next</span>
              </a>
          </div>
      </section>
  </header>

  <!--Cuerpo principal-->
  <section class="main-section">

    <!---ACCESOS----->
    <div class="container-boxes">
      <div class="box">
        <a href="productos.php"><img class="box-img" src="./images/shop.jpg" alt=""> </a>
      </div>
      <div class="box">
        <a href="productos.php"><img class="box-img" src="./images/tienda.jpg" alt=""></a>
      </div>
      <div class="box">
        <a href="preguntas_frecuentes.php"><img class="box-img" src="./images/blog.jpg" alt=""></a>
      </div>
    </div>
  <!--Pie de pagina-->
  @include('partials.footer')
</div>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>
</html>
