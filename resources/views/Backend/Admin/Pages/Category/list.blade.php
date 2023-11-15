@extends('Backend.Admin.Master')

@section('content')




<h1>Plant list</h1>


<a class="btn btn-primary" href="{{route('admin_categories_create')}}">Add Category</a>
<br></br>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Category Name</th>
      <th scope="col">Price</th>
      <th scope="col">Image</th>
      <th scope="col">Description</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($Plant_data as $item)
    <tr>
      <th scope="row">{{$item->id}}</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
      <td>@mdo</td>
      <td></td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection