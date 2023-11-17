@extends('Backend.Admin.Master')

@section('content')




<h1>Category list</h1>


<a class="btn btn-success" href="{{route('admin_categories_create')}}">Add Category</a>
<br></br>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Category_data as $Category_item)
    <tr>
      <th scope="row">{{$Category_item->id}}</th>
      <td>{{$Category_item->categoryname}}</td>
      <td>{{$Category_item->categorydescription}}</td>
      <td>
      <a class="btn btn-primary btn-sm"  href="#">View</a>
      <a class="btn btn-warning btn-sm"  href="#">Edit</a>
      <a class="btn btn-danger btn-sm"  href="#">Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$Category_data->links()}}


@endsection