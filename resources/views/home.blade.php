@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Home')

@section('content')
{{--   <section class="banner-movile">
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
	</section> --}}

        <!--Carousel-->
  <section class="banner">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>

        </ol>
        <div class="carousel-inner">
{{--             <div class="carousel-item">
  						<video loop class="d-block w-100" autoplay muted plays-inline autoplay poster="posterimage.jpg" alt="First slide">
  							<source src="./images/video.mp4" type="video/mp4">
  						</video>
  					</div> --}}
            <div class="carousel-item active">
              <img class="d-block w-100" src="./images/fid03.jpg" alt="Second slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/fid04.jpg" alt="Third slide">
            </div>
            <div class="carousel-item">
              <img class="d-block w-100" src="./images/fid05.jpg" alt="Fourth slide">
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
@endsection


@section('main')

  <div class="container-boxes">
    <div class="box">
      <a href="shopOnline"><img class="box-img" src="./images/shop.jpg" alt=""> </a>
    </div>
    <div class="box">
      <a class="nav-link fuente" href="/shops"><img class="box-img" src="./images/tienda.jpg" alt=""></a>
    </div>
    <div class="box">
      <a class="nav-link fuente" href="http://stylescout.blogspot.com/" target="_blank"><img class="box-img"  src="./images/blog.jpg" alt=""></a>
  	</div>
	</div>
@endsection
