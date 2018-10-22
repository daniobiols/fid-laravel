@extends('app')

@section('title', 'Productos')

@section('main')
  <section class="main-section">
		<form class="" action="productos_detalle.php" method="get">
      <article id=1>
        <div class="row articulos">
          <div class="shadow p-3 mb-5 bg-white rounded">
            <div class="card" style="width: 18rem;">
              <img class="card-img-top" src="" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title"></h5>
                <p class="card-text"></p>
                <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
  							<a href="productos_detalle.php?id=" class="btn btn-outline-dark">Detalle</a>
                </div>
            </div>
          </div>
  			</div>
  		</article>
		<article id=2>
	    <div class="row articulos">
        <div class="shadow p-3 mb-5 bg-white rounded">
          <div class="card" style="width: 18rem;">
            <img class="card-img-top" src="" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
              <a href="productos_detalle.php?id=" class="btn btn-outline-dark">Detalle</a>
            </div>
          </div>
        </div>
	    </div>
		</article>
		<article id=3 >
		    <!-- <h2>Mujer</h2> -->
		    <div class="row articulos">
		        <div class="shadow p-3 mb-5 bg-white rounded">
		            <div class="card" style="width: 18rem;">
		                <img class="card-img-top" src="" alt="Card image cap">
		                <div class="card-body">
		                    <h5 class="card-title"></h5>
		                    <p class="card-text"></p>
		                    <a href="#" class="btn btn-outline-dark">Agregar al carrito</a>
		                    <a href="productos_detalle.php?id=" class="btn btn-outline-dark">Detalle</a>
		                </div>
		            </div>
		        </div>
		    </div>
		</article>
		</form>
</section>
@endsection
