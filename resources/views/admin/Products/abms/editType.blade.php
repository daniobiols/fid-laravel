@extends('admin.appAdmin')
 @section('title', 'Edit Genero')
 @section('main')
 <form action="/admin/type/{{$type->id}}" method="post">
  @method('PUT')
	@csrf
	<table class="table-prod table table-bordered table-striped">
		<thead>
			<tr>
				<th>Genero</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input name="name" value="{{$type->name }}"></td>
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
