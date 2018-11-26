@extends('admin.appAdmin')
 @section('title', 'Crear SubCategoria')
 @section('main')
 <form action="/admin/subcategory/create" method="post">
	@csrf
	<table class="table-prod table table-bordered table-striped">
		<thead>
			<tr>
				<th>Nueva SubCategoria</th>
				<th>Categoria</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input name="name"></td>

				<td>
          <select class="" id="category_id" name="category_id">
    							@foreach ($categories as $category)
    								<option value="{{ $category->id }}"> {{ $category->name }}</option>
    							@endforeach
    			</select>
        </td>

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
