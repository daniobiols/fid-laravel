@extends('admin.appAdmin')
 @section('title', 'Editar Categoria')
 @section('main')
 <form action="/admin/category/{{$category->id}}" method="post">
	@method('PUT')
  @csrf
	<table class="table-prod table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nombre de Categoria</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input name="name" value="{{ $category->name }}"></td>
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
