<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('admin/partials.head')
		
@yield('head')
	<body>
		<div class="container-fluid contenedor">
			<!--Cabecera-->
			<header class="main-header">
			<!--Navbar-->
		  	@include('/admin/partials.navbar')
			<!--Content-->
			@yield('content')
			<!--Main-->
			<main class="container">
				@yield('main')
			</main>
			<!--Pie de pagina-->
		  	@include('/admin/partials.footer')
			<!--Scripts-->
			@include('/admin/partials.script')
			@yield('script')
			</header>


		</div>
	</body>
</html>
