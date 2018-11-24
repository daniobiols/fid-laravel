@extends('admin/appAdmin')

@section('title', 'Panel de control')

@section('main')

<table class="table-prod table table-bordered table-striped">
	<thead>
		<td>
		<a href="/admin/products/index">
			<button class="btn btn-success">
				<span class="fa fa-trash">Listar Productos</span>
			</button>
		</a>
		</td>
	</thead>
	<thead>
		<td>
		<a href="/admin/products/create">
			<button class="btn btn-success">
				<span class="fa fa-trash">Agregar Nuevos Productos</span>
			</button>
		</a>
		</td>
	</thead>
	<thead>
		<td>
		<a href="">
			<button class="btn btn-success">
				<span class="fa fa-trash">Crear nuevas Categorias y Subcategorias</span>
			</button>
		</a>
		</td>
	</thead>
</table>


@endsection