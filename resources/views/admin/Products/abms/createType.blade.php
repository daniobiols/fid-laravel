@extends('admin.appAdmin')
 @section('title', 'Crear Genero')
 @section('main')
 <form action="/admin/type/create" method="post">
	@csrf
	<table class="table-prod table table-bordered table-striped">
		<thead>
			<tr>
				<th>Tipo</th>
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
