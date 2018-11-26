@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Comprar')

@section('main')


<div class="container row">
  <div class="col-sm-2">
    <ul>
      <li>
        <a href="#">Tipo</a>
        <ul>

        </ul>
      </li>
      <li>
        <a href="#">Categoria</a>
        <ul>

        </ul>
      </li>
      <li>
        <a href="#">Subcategoria</a>
        <ul>

        </ul>
      </li>
    </ul>
  </div>
  <div class="col sm-10">
    <div class="card-deck table-prod">
      @foreach ($products as $product)
      <a href="products/productView/{{$product->id}}">
        <div class="card">
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
  </div>
</div>



<div class="table-prod">
  {{ $products->links() }}
</div>

@endsection
