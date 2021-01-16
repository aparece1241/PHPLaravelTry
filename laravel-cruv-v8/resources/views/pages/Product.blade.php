@extends('layouts.app')

@section('title')
    Product
@endsection

@section('content')
    
    @if (count($products)>0)
    <div class="container">
        <div class="row">
        @foreach ($products as $product)
                <div class="col-md-4 mt-4">
                    <div class="card w-100">
                        <div class="card-body">
                            <h5 class="card-title">{{$product->name}}</h5>
                            <p class="card-text">{{$product->description}}</p>
                            <small class="card-text p-2">{{$product->category}}</small>
                            <form action="" method="post"></form>
                            <form action="/products/{{$product->id}}" method="post">
                                @csrf
                                @method('DELETE')
                                <a href="/products/{{$product->id}}/edit" class="btn btn-primary">Edit</a>
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    @else
        <h1>No Products Listed yet</h1>
    @endif
@endsection
