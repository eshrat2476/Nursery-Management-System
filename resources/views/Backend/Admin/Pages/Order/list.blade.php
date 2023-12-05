@extends('Backend.Admin.Master')

@section('content')




<h1>Order list</h1>

<br>

<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Plant Name</th>
      <th scope="col">Regular Price</th>
      <th scope="col">Offer Price</th>
      <th scope="col">Total Amount</th>
      <th scope="col">Status</th>
      <th scope="col">Action</th>

    <tr>
      <th scope="row"></th>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>

        <a class="btn btn-primary btn-sm" href="">View</a>
        <a class="btn btn-warning btn-sm" href="">Edit</a>
        <a class="btn btn-danger btn-sm" href="">Delete</a>

      </td>
    </tr>
  </tbody>
</table>



@endsection