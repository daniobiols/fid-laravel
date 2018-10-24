<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('partials.head')
@yield('head')
  <body>
		<div class="container-fluid contenedor">
			<!--Cabecera-->
			<header class="main-header">
		    <!--Menu navbar-->
		    @include('partials.navbar')
				<!--Main-->
				<main class="container">
					@yield('main')
				</main>
				<!--Pie de pagina-->
		  	@include('partials.footer')
				<!--Scripts-->
				@include('partials.script')
			</header>
		</div>
	</body>
</html>
