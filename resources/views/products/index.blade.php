@extends('products.layouts')
@section('content')
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Product Name</th>
        <th scope="col">Category Name</th>
      </tr>
    </thead>
    <tbody>
      @foreach ($products as $item)
      <tr>
        <th scope="row">{{$item->id}}</th>
        <td>{{$item->Productname}}</td>
        <td>{{$item->category->name}}</td>
      </tr>
      @endforeach

    </tbody>
  </table>
@endsection
