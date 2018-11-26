@extends('admin.appAdmin')

@section('title', 'Listar Categorias')

@section('main')
	@include('admin.partials.script')
	@if (session()->has('message'))
		<div class="alert alert-sucess">
			{{ session()->get('message') }}
		</div>
	@endif
  <table class="table-prod table table-bordered table-striped">
  		<thead style="font-weight: bold"> Categorias
  			<tr>
  				<th>Nombre</th>
          <th>Accciones</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach ($categories as $category)
  				<tr>
  					<td>{{ $category->name }}</td>
            <td>
              <div class="row">
                <div class="col-sm-6">
                  <a class="btn btn-warning" href="/admin/abms/{{$category->id}}/edit">
                    <span class="fa fa-pencil">editar</span>
                  </a>
                </div>
                <div class="col-sm-6">
                  <form action="/admin/abms/{{$category->id}}" method="post">
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

  	{{ $categories->links() }}
@endsection
