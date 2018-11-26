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
		<a href="/admin/category/index">
			<button class="btn btn-success">
				<span class="fa fa-trash">Listar Categorias </span>
			</button>
		</a>
		</td>
	</thead>
	<thead>
		<td>
		<a href="/admin/category/create">
			<button class="btn btn-success">
				<span class="fa fa-trash">Agregar Nuevas Categorias</span>
			</button>
		</a>
		</td>
	</thead>
	<thead>
		<td>
		<a href="/admin/subcategory/index">
			<button class="btn btn-success">
				<span class="fa fa-trash">Listar SubCategorias </span>
			</button>
		</a>
		</td>
	</thead>
	<thead>
		<td>
		<a href="/admin/subcategory/create">
			<button class="btn btn-success">
				<span class="fa fa-trash">Agregar Nuevas Categorias</span>
			</button>
		</a>
		</td>
	</thead>
	<thead>
		<td>
		<a href="/admin/type/index">
			<button class="btn btn-success">
				<span class="fa fa-trash">Listar Generos</span>
			</button>
		</a>
		</td>
	</thead>
	<thead>
		<td>
		<a href="/admin/type/create">
			<button class="btn btn-success">
				<span class="fa fa-trash">Agregar Nuevos Generos</span>
			</button>
		</a>
		</td>
	</thead>
</table>
@endsection
