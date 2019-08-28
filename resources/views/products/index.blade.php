@extends('products.layout')

@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>CRUD</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('products.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
    <div class="py-2">
        <table class="table">
            <thead class="thead-dark">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Detail</th>
            </tr>
            </thead>
            <tbody>
            @foreach($products as $product)
                <tr>
                    <th scope="row">{{ ++$i }}</th>
                    <td>{{$product->name}}</td>
                    <td>{{$product->detail}}</td>
                    <td>
                        <a href="{{ route('products.edit',$product->id) }}"><i class="fas fa-edit"></i></a>

                        <a href="{{ route('products.show',$product->id) }}" target="_blank"><i
                                class="fas fa-share-square"></i></a>

                    </td>
                </tr>
            @endforeach

            </tbody>
        </table>

    </div>
@endsection
