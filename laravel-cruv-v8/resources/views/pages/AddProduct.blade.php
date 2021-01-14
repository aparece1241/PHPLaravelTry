@extends('layouts.app')

@section('title')
    Add Product
@endsection

@section('content')
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    
    <div class="row border align-center">
        <div class="card col-md-4 border mx-5 mt-5">
            <h3 class="text-center ">Add new Product</h3>
            <form action="/products" method="post">
                @csrf
                <label for="name">product Name:
                        <input type="text" name="name" id="">
                </label>
                
                <label for="description">
                    Product Description: <input type="text" name="description" id="">
                </label>
    
                <label for="price">
                    Product Price: <input type="number" name="price" id="">
                </label>
                
                <label for="price">
                    Product Price: <select name="category" id="">
                        <option value="grocery">Grocery</option>
                        <option value="gadget">Gadget</option>
                        <option value="hardware">Hardware</option>
                    </select>
                </label><br>

                <input type="submit" class="btn btn-primary" value="Add">
            </form>
        </div>
    </div>
@endsection