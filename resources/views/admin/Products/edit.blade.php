@extends('admin/appAdmin')

@section('title', 'Editar Productos')

@section('main')
@include('admin.Products.errors')
{{-- {{$product}} --}}
<div class="container">
	<form class="" action="/admin/products/{{ $product->id }}" method="post" enctype="multipart/form-data">
		@method('PUT')
		@csrf
		<div class="row table-prod table-striped" style=" ">
			{{-- --background-color: red --}}
			<div class="col-md-3">
				<div class=" item-responsive center">
					@foreach ($product->image as $img)
						 <img class="img-responsive" src="/storage/{{$img->src}}">
				 @endforeach
				 </div>
			</div>
			{{-- style="border:0px solid gray --}}
	    <div class="col-sm-9 "  >
	        <!-- Titulo del producto -->
					<div class="form-group " >
		        <label class="" for="name">Nombre : </label>
						<input class="" type="text" name="name" value="{{ $product->name }}">
						<label for="product_code">Codigo de Producto </label>
						<input type="text" name="product_code" value="{{ $product->product_code }}">
					</div>
					<div class="form-group">
						<label for="description">Descripcion </label>
					 	<input type="text" name="description" value="{{ $product->description }}">
					</div>
					<div class="form-group ">
							<label for="type">Dirigido a</label>
							<select class="" id="type" name="type_id">
								@foreach ($types as $type)
									@php
										$selected= ($type->id == $product->type_id)?'selected':''
									@endphp
									<option {{ $selected }} value="{{ $type->id }}"> {{ $type->name }}</option>
								@endforeach
							</select>

							<label for="trademark">Marca </label>
							<input class="" type="text" name="trademark" value="{{ $product->trademark }}">
					</div>
					<div class="form-group">
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
					</div>
					<div class="form-group">
								<label for="price">Precio </label>
								<input style="width:70px" type="number" name="price" value="{{ $product->price }}">
								<label for="price_list">Precio de Lista </label>
								<input style="width:70px" type="number" name="price_list" value="{{ $product->price_list }}">
					</div>

					<div class="form-group">
						<label for="size">Talla </label>
						<input style="width:70px" type="text" name="size" value="{{ $product->size }}">
						<label for="color">Color </label>
						<input type="text" name="color" value="{{ $product->color }}">
					</div>
					<div class="form-group">
						<label for="quantity">Cantidad </label>
						<input style="width:70px" type="text" name="quantity" value="{{ $product->quantity }}">
					</div>
					<div class="form-group">
			      <label for="images" class="btn btn-sucess">Imagenes</label>
			      <input type="file" name="images[]" id="images" multiple>
			    </div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
					<input type="hidden" name="id" value="{{$product->id}}">
				{{-- fin --}}
	    </div>
	  </div>
		</div>
	</form>
</div>
@endsection
