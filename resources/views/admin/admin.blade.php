@extends('admin/appAdmin')

@section('title', 'Panel de control')

@section('main')

<table class="table-prod table table-bordered table-striped">
	<thead>
		<td>
		<a href="/admin/products/index">
			<button class="btn btn-success">
				<span class="fa fa-trash">Generar Lista de Productos</span>
			</button>
		</a>
		</td>
	</thead>
</table>


@endsection