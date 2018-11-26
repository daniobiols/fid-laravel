@extends('admin.appAdmin')

@section('title', 'Listar Productos')

@section('main')
	@include('admin.partials.script')
	@if (session()->has('message'))
		<div class="alert alert-sucess">
			{{ session()->get('message') }}
		</div>
	@endif
  <table class="table-prod table table-bordered table-striped">
  		<thead style="font-weight: bold"> tipos
  			<tr>
  				<th>Nombre</th>
          <th>Accciones</th>
  			</tr>
  		</thead>
  		<tbody>
  			@foreach ($types as $type)
  				<tr>
  					<td>{{ $type->name }}</td>
            <td>
              <div class="row">
                <div class="col-sm-6">
                  <a class="btn btn-warning" href="/admin/abms/{{$type->id}}/edit">
                    <span class="fa fa-pencil">editar</span>
                  </a>
                </div>
                <div class="col-sm-6">
                  <form action="/admin/abms/{{$type->id}}" method="post">
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

  	{{ $types->links() }}
@endsection
