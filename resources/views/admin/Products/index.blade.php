@extends('app')

@section('title', 'Listar Productos')

@section('main')


<ul>
	@foreach ($products as $element)
		<li>{{$element->name}}</li>
		<li>{{$element->description}}</li>
		<li>{{$element->product_code}}</li>
	@endforeach
</ul>

@endsection
