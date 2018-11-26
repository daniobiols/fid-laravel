@extends('admin.appAdmin')

@section('title', 'Listar SubCategorias')

@section('main')
	@include('admin.partials.script')
	@if (session()->has('message'))
		<div class="alert alert-sucess">
			{{ session()->get('message') }}
		</div>
	@endif
  <table class="table-prod table table-bordered table-striped">
  		<thead style="font-weight: bold"> SubCategorias
  			<tr>
					<th>Categoria</th>
  				<th>SubCategoria</th>
          <th>Accciones</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach ($subcategories as $subcategory)
  				<tr>
						<td>{{ $subcategory->category->name }}</td>
  					<td>{{ $subcategory->name }}</td>
            <td>
              <div class="row">
                <div class="col-sm-6">
                  <a class="btn btn-warning" href="/admin/subcategory/{{$subcategory->id}}/edit">
                    <span class="fa fa-pencil">editar</span>
                  </a>
                </div>
                <div class="col-sm-6">
                  <form action="/admin/subcategory/{{$subcategory->id}}" method="post">
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

  	{{ $subcategories->links() }}
@endsection
