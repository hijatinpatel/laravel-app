@extends('layouts.app')

@section('content')

<style>
    
</style>

<div class="container mt-4">



    <h1>Add Product</h1>
    <a href="{{ route('product.index') }}">Product list</a>
    <hr>
    <form action="{{ route('product.store') }}" method="post">
        @csrf

        
<div>
   Product name:  <input class="form-control" type="text" name="name">
<div>
@error('name')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        product price : <input class="form-control" type="number" name="price">
</div>
@error('price')
    <div class="alert alert-danger">{{ $message }}</div>
@enderror
        <input class="btn btn-primary mt-2" type="submit" name="submit" value="add product" >
    </form>
    </div>
@endsection