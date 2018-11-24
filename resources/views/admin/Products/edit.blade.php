@extends('admin/appAdmin')

@section('title', 'Editar Productos')

@section('main')
@include('admin.Products.errors')
{{-- {{$product}} --}}

<form class="" action="/admin/products/{{ $product->id }}" method="post" enctype="multipart/form-data">
	@method('PUT')
	@csrf
	<div class="row table-prod">
	   <div class="col-xs-4 item-photo">
	        <img style="max-width:100%;" src="https://static.mercadoshops.com/vans-sk8-hi-negras_iZ992544310XvZgrandeXpZ1XfZ24509095-716890269-1XsZ24509095xIM.jpg" />
	    </div>
	    <div class="col-xs-6" style="border:0px solid gray">
	        <!-- Titulo del producto -->
					<div class="form-group">
		        <label for="name">Nombre </label>
						<input type="text" name="name" value="{{ $product->name }}">
						<label for="description">Descripcion </label>
					 	<input type="text" name="description" value="{{ $product->description }}">
						<label for="type">Dirigido a</label>
						<select class="" id="type" name="type_id">
							@foreach ($types as $type)
								@php
									$selected= ($type->id == $product->type_id)?'selected':''
								@endphp
								<option {{ $selected }} value="{{ $type->id }}"> {{ $type->name }}</option>
							@endforeach
						</select>
					</div>

					<label for="category_id">Categoria</label>
		      <select class="" id="category_id" name="category_id">
		        @foreach ($categories as $category)
		  				@php
						    $selected= ($category->id ==$product->category_id)?'selected':''
						  @endphp
		          <option {{ $selected }} value="{{ $category->id }}"> {{ $category->name }}</option>
		        @endforeach
		      </select>
					<label for="subcategory_id">Subcategoria</label>
					<select class="" id="subcategory_id" name="subcategory_id">
						@foreach ($subcategories as $subcategory)
							@php
								$selected= ($subcategory->id ==$product->subcategory_id)?'selected':''
							@endphp
							<option {{ $selected }} value="{{ $subcategory->id }}"> {{ $subcategory->name }}</option>
						@endforeach
					</select>
	        <!-- Precio -->
					<label for="price">Precio </label>
					<input type="number" name="price" value="{{ $product->price }}">
					<label for="price_list">Precio de Lista </label>
					<input type="number" name="price_list" value="{{ $product->price_list }}">
					{{-- marca --}}
						<label for="trademark">Marca </label>
						<input type="text" name="trademark" value="{{ $product->trademark }}">
	        <!-- Color del producto -->
					<label for="color">Color </label>
					<input type="text" name="color" value="{{ $product->color }}">
	        <!-- Talle del producto -->
					<label for="size">Talla </label>
					<input type="text" name="size" value="{{ $product->size }}">

					<label for="quantity">Cantidad </label>
					<input type="text" name="quantity" value="{{ $product->quantity }}">

					<div class="form-group">
			      <label for="images" class="btn btn-sucess">Imagenes</label>
			      <input type="file" name="images[]" id="images" multiple>
			    </div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
					<input type="hidden" name="id" value="{{$product->id}}">
	    </div>
	  </div>
	</div>
</form>

	{{-- <table class="table-prod table table-bordered table-striped">
		{{-- {{ dd($product->name) }} --}}
		{{-- <thead>
			<tr>
				<th>Nombre</th>
				<th>Marca</th>
				<th>Codigo</th>
				<th>Precio (ars)</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><input type="" name="name" value={{ $product->name }}></td>
				<td><input type="" name="description" value={{ $product->description }}></td>
				<td><input type="" name="product_code" value={{ $product->product_code }}></td>
				<td><input type="" name="price" value={{ $product->price }}></td>
				<td>
					<button class="btn btn-success">
						<span class="fa fa-trash">Guardar</span>
					</button>
				</td>
			</tr>
		</tbody> --}}
	{{-- </table> --}}

@endsection
