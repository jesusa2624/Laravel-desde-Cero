@extends('layouts.master')

@section('content')


    <h1>Lista de productos</h1>

    @empty($products)
        <div class="alert alert-warning">
            Esta lista de productos es vacia
        </div>
    @else
        <div class="table-responsive">
            <table class="table tablr-striped">
                <thead class="thead-light">
                    <tr>
                        <th>Id</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Price</th>
                        <th>Stock</th>
                        <th>Satatus</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($products as $product)
                        <tr>
                            <td>{{ $product->id }}</td>
                            <td>{{ $product->title }}</td>
                            <td>{{ $product->description }}</td>
                            <td>{{ $product->price }}</td>
                            <td>{{ $product->stock }}</td>
                            <td>{{ $product->status }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    @endempty
@endsection
