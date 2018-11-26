@extends('admin.appAdmin')
 @section('title', 'Editar SubCategoria')
 @section('main')
 <form action="/admin/subcategory/{{$subcategory->id }}" method="post">
  @method('PUT')
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
				<td><input name="name" value="{{ $subcategory->name }}"></td>

				<td>
          <select class="" id="category_id" name="category_id">
            @foreach ($categories as $cat)
              @php
                $selected= ($cat->id==$subcategory->category_id)?'selected':''
              @endphp
              <option {{ $selected }} value="{{ $cat->id }}"> {{ $cat->name }}</option>
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
