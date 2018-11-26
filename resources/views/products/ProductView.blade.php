@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Producto')

@section('main')

<div class="row table-prod" style="padding: 20px;">
   <div class="col-xs-4 item-photo">
     @foreach ($product->image as $img)
      <p>
        <img class="card-img-top imgView" src="/storage/{{$img->src}}">
      </p>
    @endforeach
        {{-- <img style="max-width:100%;" src="{{ $product->image->src }}" /> --}}
    </div>
    <div class="col-xs-5" style="border:0px solid gray">
        <!-- Titulo del producto -->
        <h3>{{$product->name}}</h3>
        <h5 style="color:#337ab7">{{$product->trademark}}
        <h5 class="title-price">{{$product->description}}

        <!-- Precio -->
        <h6 class="title-price"><small>PRECIO</small></h6>
        <h3 style="margin-top:0px;">${{$product->price}}</h3>

        <!-- Color del producto -->
        <div class="section">
            <h6 class="title-attr" style="margin-top:15px;"><small>COLOR</small></h6>
            <br>
            <div>
                <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                <div class="attr" style="width:25px;background:white;"></div>
            </div>
        </div>
        <!-- Talle del producto -->

        <div class="" style="padding-bottom:5px;">
            <h6 class="title-attr"><small>Talle</small></h6>
            <div>
                <div class="attr2">{{$product->size}}</div>
            </div>
        </div>
        {{-- <div class="section" style="padding-bottom:20px;">
            <h6 class="title-attr"><small>CANTIDAD</small></h6>
            <div>
                <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                <input value="1" />
                <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
            </div>
        </div> --}}

        <!-- Boton agregar al carrito -->
        <div class="section">
            <a href="/cart/add/{{$product->id}}"><button class="btn btn-success" style="width: 110%">Agregar al carrito</button></a>
        </div>
    </div>
</div>

@endsection
