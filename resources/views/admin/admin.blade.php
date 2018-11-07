@extends('app')

@section('title', 'Administrador')

@section('main')
 <div>
 	<ul>
 		<li>
			<a href="products/index">Index Productos</a>
 		</li>
 		<li>
			<a href="products/show">Show Productos</a>
 		</li>
 	</ul>
{{-- 	<a href="products/index">Index Productos</a>
	<a href="products/show">Show Productos</a>
	<a href="/home">Agregar Producto</a>
	<a href="/home">Editar Productos</a>
	<a href="/home">Eliminar Productos</a> --}}
 		
 </div>
@endsection
