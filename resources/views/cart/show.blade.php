@extends('app')

@section('title', 'Mis Pedidos')

@section('main')


<table class="table-prod table table-bordered table-striped">
    <thead>
        <tr>
            <th>Nombre</th>
            <th>Marca</th>
            <th>Codigo</th>
            <th>Precio (ars)</th>
            <th>Cantidad</th>
            <th>Cantidad</th>
        </tr>
    </thead>
    <tbody>
    @foreach ($cart as $product)
        <tr>
            <td>{{ $product->name }}</td>
            <td>{{ $product->trademark }}</td>
            <td>{{ $product->product_code }}</td>
            <td>${{ $product->price }}</td>
            <td><input style="width:70px" type="number" name="quantity{{$product->id}}" value="" ></td>
            <td>
                <form action="/cart/delete/{{$product->id}}" method="post">
                    @method('DELETE')
                    @csrf
                    <button class="btn btn-danger">
                        <img src="/images/icon/trash.png"></img>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<table class="table-prod table table-bordered table-striped">
    <tbody>
        <tr>
            <td>
                <form action="/purchase/create" method="post">
                    @csrf
                    <button class="btn btn-info">Realizar Compra</button>
                </form>
            </td>
        </tr>
        <tr>
            <a href="/shopOnline"><button class="btn btn-info" style="font-family: 'Montserrat', sans-serif;">Seguir comprando</button></a>
        </tr>
    </tbody>
</table>



@endsection
