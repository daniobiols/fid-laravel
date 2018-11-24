@extends('admin/appAdmin')

@section('title', 'Listar Productos')

@section('main')
	@if (session()->has('message'))
		<div class="alert alert-sucess">
			{{ session()->get('message') }}
		</div>
	@endif

<table class="table-prod table table-bordered table-striped">
		{{-- {{ dd($products) }} --}}
		<thead>
			<td>
				<a href="/admin/products/create">
					<button class="btn btn-success">
						<span class="fa fa-trash">Crear nuevo producto</span>
					</button>
				</a>
			</td>
		</thead>

		<thead>
			<tr>
				<th>Nombre</th>
				<th>Dirigido a </th>
				<th>Marca</th>
				<th>Descripcion</th>
				<th>Codigo</th>
				<th>Categoria</th>
				<th>Sub Categoria</th>
				<th>Precio (ars)</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->type->name }}</td>
					<td>{{ $product->trademark }}</td>
					<td>{{ $product->description }}</td>
					<td>{{ $product->product_code }}</td>
					<td>{{ $product->category->name }}</td>
					<td>{{ $product->subcategory->name }}</td>
					<td>{{ $product->price }}</td>

					<td>
						<div class="row">
							<div class="col-sm-6">
								<a class="btn btn-warning" href="/admin/products/{{$product->id}}/edit">
									<span class="fa fa-pencil">editar</span>
								</a>
							</div>
							<div class="col-sm-6">
								<form action="/admin/products/{{$product->id}}" method="post">
									@method('DELETE')
									@csrf
									<button class="btn btn-danger">
										<span class="fa fa-trash">eliminar</span>
									</button>
								</form>
							</div>
						</div>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{{ $products->links() }}

@endsection
