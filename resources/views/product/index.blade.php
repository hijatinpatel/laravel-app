@extends('layouts.app')

@section('content')


    <h1>Product List</h1>
    <a class="btn btn-info" href="{{ route('product.create') }}">Add Product</a>
    <br>
    <hr>    

    @if(session()->has('sucesss'))
      <div class="alert alert-success">{{ session()->get('sucesss') }}</div>
    @endif

    @if(session()->has('fail'))
      <div class="alert alert-danger">{{ session()->get('fail') }}</div>
    @endif
    <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
  @foreach($products as $p)
    <tr>
      <th scope="row">{{ $p->id }}</th>
      <td>{{ $p->name }}</td>
      <td>{{ $p->price }}</td>
      <td>
        <a href="{{ route('product.edit',['id' => $p->id]) }}" class="btn btn-primary">edit</a>
        <a class="btn btn-danger" href="{{ route('product.delete',['id' => $p->id]) }}">delete</a>
    </td>
    </tr>

    @endforeach



  </tbody>
</table>


<div>
  {{ $products->links() }}
</div>
@endsection
