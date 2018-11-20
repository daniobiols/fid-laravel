@extends('app')

@section('title', 'Listar Productos')

@section('main')


<table class="table-prod table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre</th>
				<th>Marca</th>
				<th>Codigo</th>
				<th>Precio (ars)</th>
				<th>Accion</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($products as $product)
				<tr>
					<td>{{ $product->name }}</td>
					<td>{{ $product->description }}</td>
					<td>{{ $product->product_code }}</td>
					<td>{{ $product->price }}</td>
					<td>
						<a class="btn btn-primary" href="/admin/products/{{$product->id}}/edit">
							<span class="fa fa-pencil"></span>
						</a>
						<form action="/admin/products/{{$product->id}}" method="post">
							@method('DELETE')
							@csrf
							<button class="btn btn-danger">
								<span class="fa fa-trash"></span>
							</button>
						</form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>

	{{ $products->links() }}

@endsection
