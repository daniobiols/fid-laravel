@extends('admin.app')

@section('title', 'Productos')

@section('main')

	{{-- @if (session()->has('message'))
		<div class="alert alert-success">
			{{ session()->get('message') }}
		</div>
	@endif --}}

	{{-- <table class="table table-bordered table-striped">
		<thead>
			<tr>
				<th>Categoría</th>
			</tr>
		</thead>
		<tbody>
			@foreach ($category as $key)
				<tr>
					<td>{{ $key->name }}</td>
					<td>
						{{-- <a class="btn btn-primary" href="/admin/products/{{$key->id}}/edit">
							<span class="fa fa-pencil"></span>
						</a> --}}
						{{-- <form action="/admin/products/{{$key->id}}" method="post">
							{{-- @method('DELETE') --}}
							@csrf
							@foreach ($category as $key)
							{{	$key->name}}
							@endforeach
							{{-- <button class="btn btn-danger">
								<span class="fa fa-trash"></span>
							</button> --}}
						{{-- </form>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table> --}} --}}

	{{ $category->links() }} --}}
@endsection
