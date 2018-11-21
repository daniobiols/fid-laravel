@extends('app')

@section('title', 'Editar Productos')

@section('main')

{{-- {{$product}} --}}
<form action="/admin/products/{{$product->id}}/edit" method="post">
	@method('put')
	@csrf	
	<table class="table-prod table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Marca</th>
				<th>Codigo</th>
				<th>Precio (ars)</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="" name="name" value={{ $product->name }}></td>
				<td><input type="" name="description" value={{ $product->description }}></td>
				<td><input type="" name="product_code" value={{ $product->product_code }}></td>
				<td><input type="" name="price" value={{ $product->price }}></td>
				<td>
					<button class="btn btn-success">
						<span class="fa fa-trash">Guardar</span>
					</button>
				</td>
			</tr>
		</tbody>
	</table>
</form>
@endsection
