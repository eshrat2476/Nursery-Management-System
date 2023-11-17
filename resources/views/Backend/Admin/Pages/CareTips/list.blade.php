@extends('Backend.Admin.Master')

@section('content')

<h1>Care & Tips</h1>

<a class="btn btn-success " href="{{route('admin_care_tips_create')}}">Add Plants Care & Tipst</a>
<br></br>
<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Plant Name</th>
      <th scope="col">Care & Tips</th>
      <th scope="col">Action</th>
    </tr>
  </thead>
  <tbody>
    @foreach($CareTips_data as $CareTips_item)
    <tr>
      <th scope="row">{{$CareTips_item->id}}</th>
      <td>{{$CareTips_item->plantname}}</td>
      <td>{{$CareTips_item->caretips}}</td>
      <td>
        <a class="btn btn-primary btn-sm" href="#">View</a>
        <a class="btn btn-warning btn-sm" href="#">Edit</a>
        <a class="btn btn-danger btn-sm" href="#">Delete</a>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>

{{$CareTips_data->links()}}



@endsection