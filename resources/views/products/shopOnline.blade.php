@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Comprar')

@section('main')

<div class="row">
  <div class="col-2">
    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="btnGenre" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Genero
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($types as $type)
          <a class="dropdown-item" href="shopOnline?type={{ $type->id }}">{{ $type->name }}</a>
        @endforeach

      </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="btnCat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Categoria
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($categories as $cat)
          <a class="dropdown-item" href="shopOnline?categories={{ $cat->id }}">{{ $cat->name }}</a>
        @endforeach
      </div>
    </div>

    <div class="dropdown">
      <button class="btn btn-secondary dropdown-toggle" type="button" id="btnSubCat" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
        Dropdown button
      </button>
      <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
        @foreach ($subcategories as $sub)
          <a class="dropdown-item" href="shopOnline?type={{ $sub->id }}">{{ $sub->name }}</a>
        @endforeach
      </div>
    </div>
  </div>
  
  <div class="col-10">
    <div class="card-deck table-prod">
      @foreach ($products as $product)
      <a href="products/productView/{{$product->id}}">
        <div class="card" >
           @foreach ($product->image as $img)
            <p>
              <img class="card-img-top" src="/storage/{{$img->src}}">
            </p>
          @endforeach
          <div class="card-body">
            <h5 class="card-title">{{$product->name}}</h5>
            <h5 class="card-title">{{$product->description}}</h5>
            <p class="card-text">{{$product->talle}}</p>
            <p class="card-text">{{$product->price}}</p>
            {{-- <p>{{$product->image->src}}</p> --}}
          </div>
          <div class="card-footer">
            <small class="text-muted">
             <a href="/cart/add/{{$product->id}}">Agregar al carrito</a>
            </small>
           </div>
        </div>
      </a>
      @endforeach
    </div>
    <div class="table-prod">
      {{ $products->links() }}
    </div>
  </div>
</div>

@endsection
