@extends('Backend.Admin.Master')

@section('content')




<h1>Category list</h1>


<div class="container">
  <a class="btn btn-primary" href="{{route('admin_categories_print')}}">Print</a>
  <br></br>
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
        <a class="btn btn-warning btn-sm" href="{{route('categories_edit',$Category_item->id)}}">Edit</a>
        <a class="btn btn-danger btn-sm" onclick="showAlert()" href="{{route('categories_delete',$Category_item->id)}}">Delete</a>

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$Category_data->links()}}

@endsection

<script>
  function showAlert() {
    alert("Are You Sure You Want To Delete this Item?");
  }
</script>

