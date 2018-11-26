@extends('admin.appAdmin')
 @section('title', 'Crear Categoria')
 @section('main')
 <form action="/admin/category/create" method="post">
	@csrf
	<table class="table-prod table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre de Categoria</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input name="name"></td>
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
