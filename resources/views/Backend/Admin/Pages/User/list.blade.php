@extends('Backend.Admin.Master')

@section('content')

<h1>User list</h1>

<a class="btn btn-success" href="{{route('admin_user_create')}}">Add User</a>
<br></br>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Role</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($User_data as $User_item)
    <tr>
      <th scope="row">{{$User_item->id}}</th>
      <td>{{$User_item->name}}</td>
      <td>{{$User_item->email}}</td>
      <td>{{$User_item->role}}</td>
      <td>
        <a class="btn btn-primary btn-sm" href="#">View</a>
        <a class="btn btn-warning btn-sm" href="#">Edit</a>
        <a class="btn btn-danger btn-sm" href="#">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$User_data->links()}}

@endsection