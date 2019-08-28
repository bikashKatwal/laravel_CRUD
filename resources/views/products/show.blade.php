@extends('products.layout')

@section('content')
    <form action="{{ route('products.destroy',$product->id) }}" method="POST">
        @method('DELETE')
        <a href="{{ route('products.destroy',$product->id) }}">
            <i class="fas fa-times"></i></a>
    </form>
@endsection
