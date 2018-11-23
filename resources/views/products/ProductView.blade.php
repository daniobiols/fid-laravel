@extends('app')

@section('head')
  <meta charset="utf-8">
@endsection

@section('title', 'Producto')

@section('main')

<div class="row table-prod">
   <div class="col-xs-4 item-photo">
        <img style="max-width:100%;" src="https://static.mercadoshops.com/vans-sk8-hi-negras_iZ992544310XvZgrandeXpZ1XfZ24509095-716890269-1XsZ24509095xIM.jpg" />
    </div>
    <div class="col-xs-5" style="border:0px solid gray">
        <!-- Titulo del producto -->
        <h3>{{$product->name}}</h3>    
        <h5 style="color:#337ab7">{{$product->description}}

        <!-- Precio -->
        <h6 class="title-price"><small>PRECIO</small></h6>
        <h3 style="margin-top:0px;">${{$product->price}}</h3>

        <!-- Color del producto -->
        <div class="section">
            <h6 class="title-attr" style="margin-top:15px;" ><small>COLOR</small></h6>                    
            <div>
                <div class="attr" style="width:25px;background:#5a5a5a;"></div>
                <div class="attr" style="width:25px;background:white;"></div>
            </div>
        </div>
        <!-- Talle del producto -->

        <div class="section" style="padding-bottom:5px;">
            <h6 class="title-attr"><small>Talle</small></h6>                    
            <div>
                <div class="attr2">{{$product->size}}</div>
            </div>
        </div>   
        <div class="section" style="padding-bottom:20px;">
            <h6 class="title-attr"><small>CANTIDAD</small></h6>                    
            <div>
                <div class="btn-minus"><span class="glyphicon glyphicon-minus"></span></div>
                <input value="1" />
                <div class="btn-plus"><span class="glyphicon glyphicon-plus"></span></div>
            </div>
        </div>                

        <!-- Boton agregar al carrito -->
        <div class="section" style="padding-bottom:20px;">
            <a href="/cart/add/{{$product->name}}"><button class="btn btn-success"><span style="margin-right:20px" class="glyphicon glyphicon-shopping-cart" aria-hidden="true"></span> Agregar al carrito</button></a>
        </div>                                        
    </div>                              
  </div>    
</div>
  
@endsection
