@extends('app')
 @section('title', 'Crear Categoria')
 @section('main')
 <form action="/admin/category/createCategory" method="post">
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
				<td><input name="name"></td>
				<td><input name="description"></td>
				<td><input name="product_code" ></td>
				<td><input name="price"></td>
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
