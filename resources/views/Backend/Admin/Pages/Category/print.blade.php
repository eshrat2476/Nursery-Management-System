@extends('Backend.Admin.Master')

@section('content')



<h1>Plant list</h1>


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
        <a class="btn btn-warning btn-sm" href="">Edit</a>
        <a class="btn btn-danger btn-sm" href="">Delete</a>

      </td>
    </tr>
    @endforeach
    <button onclick="printlist()">Print List</button>
    <script>
        function printlist(){
            window.print();
        }
    </script>
  </tbody>
</table>



@endsection