@extends('admin/appAdmin')

@section('title', 'Crear Producto')

@section('main')
<form class="" action="/admin/products/create" method="post" enctype="multipart/form-data">
	{{-- @method('PUT') --}}
	@csrf

	<div class="row table-prod">

	    <div class="col-sm-12" style="border:0px solid gray">
	        <!-- Titulo del producto -->
					<div class="form-group">
		        <label for="name">Nombre </label>
						<input type="text" name="name" value="">
						<label for="product_code">Codigo de Producto </label>
						<input type="text" name="product_code" value="">
					</div>
					<div class="form-group">
						<label for="description">Descripcion </label>
					 	<input type="text" name="description" value="">
					</div>
					<div class="form-group">
						<label for="type">Dirigido a</label>
						<select class="" id="type" name="type_id">
							@foreach ($types as $type)
								<option value="{{ $type->id }}"> {{ $type->name }}</option>
							@endforeach
						</select>
						{{-- marca --}}
						<label for="color">Marca </label>
						<input type="text" name="trademark" value="">
					</div>
					<div class="form-group">
						<label for="category_id">Categoria</label>
			      <select class="" id="category_id" name="category_id">
			        @foreach ($categories as $category)
			          <option value="{{ $category->id }}"> {{ $category->name }}</option>
			        @endforeach
			      </select>
						<label for="subcategory_id">Subcategoria</label>
						<select class="" id="subcategory_id" name="subcategory_id">
							@foreach ($subcategories as $subcategory)
								<option  value="{{ $subcategory->id }}"> {{ $subcategory->name }}</option>
							@endforeach
						</select>
					</div>
					<div class="form-group">
						<!-- Precio -->
						<label for="price">Precio </label>
						<input style="width:70px" type="number" name="price" value="">
						<label for="price_list">Precio de Lista </label>
						<input style="width:70px" type="number" name="price_list" value="">
					</div>
					<div class="form-group">
						<!-- Talle del producto -->
						<label for="size">Talla </label>
						<input style="width:70px" type="text" name="size" value="">

						<!-- Color del producto -->
						<label for="color">Color </label>
						<input type="text" name="color" value="">
					</div>
					<div class="form-group">
						<label for="quantity">Cantidad </label>
						<input style="width:70px" type="text" name="quantity" value="">

			      <label for="images" class="btn btn-sucess">Imagenes</label>
			      <input type="file" name="images[]" id="images" multiple>
			    </div>
					<div class="form-group">
						<button class="btn btn-primary">Guardar</button>
					</div>
					{{-- <input type="hidden" name="id" value="{{$product->id}}"> --}}
	    </div>
	  </div>
	</div>
</form>
@endsection
