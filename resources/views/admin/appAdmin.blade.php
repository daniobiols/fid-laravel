<!doctype html>
<html lang="{{ app()->getLocale() }}">
@include('admin/partials.head')
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
@yield('head')
	<body>
		<div class="container-fluid contenedor">
			<!--Cabecera-->
			<header class="main-header">
			<!--Navbar-->
		  	@include('/admin/partials.navbar')
			<!--Content-->
			</header>
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


		</div>
	</body>
</html>
