@extends('layouts.app')

@section('content')

<style>
    
</style>

<div class="container mt-4">



    <h1>Edit Product</h1>
    <a href="{{ route('product.index') }}">Product list</a>
    <hr>
    <form action="{{ route('product.update') }}" method="post">
        @csrf
   <input type="hidden" name="product_id" value="{{ $product->id }}">
<div>
   Product name:  <input class="form-control" type="text" name="name" value="{{ $product->name }}">
<div>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        product price : <input class="form-control" type="number" name="price" value="{{ $product->price }}">
</div>
@error('price')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        <input class="btn btn-primary mt-2" type="submit" name="submit" value="update" >
    </form>
    </div>
@endsection