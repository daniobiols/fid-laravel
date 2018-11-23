@extends('app')

@section('title', 'Mis compras')

@section('main')


<table class="table-prod table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Marca</th>
                <th>Codigo</th>
                <th>Precio (ars)</th>
                <th>Cantidad</th>
                <th>Accion</th>
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
                    <td>
                        <form action="/cart/delete/{{$product->id}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn btn-danger">
                                <span class="fa fa-trash">Quitar</span>
                            </button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>

    {{-- {{ $cart->links() }} --}}

@endsection
