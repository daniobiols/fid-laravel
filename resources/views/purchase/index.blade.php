@extends('app')

@section('title', 'Mi compra')

@section('main')


<table class="table-prod table table-bordered table-striped">
    <thead>
        <tr>
            <th class="btn-success">Tu compra se realizo con exito</th>
        </tr>
</table>
<table class="table-prod table table-bordered table-striped">
     <tr>
        <th>Detalles de tu compra</th>
    </tr>
</table>
<table class="table-prod table table-bordered table-striped">
    <tr>
        <th>Nombre</th>
        <th>Marca</th>
        <th>Codigo</th>
        <th>Precio (ars)</th>
        <th>Cantidad</th>
    </tr>
    </thead>
        <tbody>
            @foreach ($cart as $product)
                <tr>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->description }}</td>
                    <td>{{ $product->product_code }}</td>
                    <td>{{ $product->quant }}</td>
                    <td>{{ $product->price }}</td>
                </tr>
            @endforeach
        </tbody>
    </thead>
</table>
<tbody>
    <tr>
        <td>
            <a href="/"><button class="btn btn-info" style="font-family: 'Montserrat', sans-serif;">Volver al Home</button></a>
        </td>
    </tr>
</tbody>

@endsection
