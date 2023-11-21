@extends('Backend.Admin.Master')

@section('content')



<h1>Plant list</h1>


<a class="btn btn-success" href="{{route('admin_plants_create')}}">Add Plant</a>
<br></br>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Plant_data as $Plant_item)
    <tr>
      <th scope="row">{{$Plant_item->id}}</th>
      <td>{{$Plant_item->plantname}}</td>
      <td>{{$Plant_item->plantprice}}</td>
      <td>{{$Plant_item->plantimage}}</td>
      <td>{{$Plant_item->plantdescription}}</td>
      <td>
        <a class="btn btn-primary btn-sm" href="#">View</a>
        <a class="btn btn-warning btn-sm" href="#">Edit</a>
        <a class="btn btn-danger btn-sm" href="#">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$Plant_data->links()}}


@endsection