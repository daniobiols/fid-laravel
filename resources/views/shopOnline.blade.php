@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Comprar')

@section('main')

<div class="card-deck table-prod">
  @foreach ($products as $element)
    <div class="card">
      <img class="card-img-top" src="./images/prod_img/prod0001.jpg" alt="Card image cap">
      <div class="card-body">
       <h5 class="card-title">{{$element->name}}</h5>
       <h5 class="card-title">{{$element->description}}</h5>
       <p class="card-text">{{$element->talle}}</p>
       <p class="card-text">${{$element->price}}</p>
      </div>
    <div class="card-footer">
      <small class="text-muted">
        <a href="">Agregar al carrito</a>
      </small>
    </div>
  </div>
  @endforeach
</div>
<div class="table-prod">
  {{ $products->links() }}
</div>
  
@endsection
