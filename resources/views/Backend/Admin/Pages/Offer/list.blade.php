@extends('Backend.Admin.Master')

@section('content')

<h1>Offers List</h1>

<a class="btn btn-success btn-sm" href="{{route('admin_offers_create')}}">Add Offer</a>
<br></br>

<table class="table">
    <thead class="thead-light">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Plant Name</th>
            <th scope="col">Original Price</th>
            <th scope="col">Offer Price</th>
            <th scope="col">Status</th>
            <th scope="col">Action</th>
        </tr>
    </thead>

    <tbody>
        @foreach($Offers_data as $offersitem)
        <tr>
            <th scope="row">{{$offersitem->id}}</th>
            <td>{{$offersitem->plantname}}</td>
            <td>{{$offersitem->originalprice}} .BDT</td>
            <td>{{$offersitem->offerprice}} .BDT</td>
            <td>{{$offersitem->offerstatus}}</td>
            <td>
                <a class="btn btn-warning btn-sm" href="{{route('offers_edit',$offersitem->id)}}">Edit</a>
                <a class="btn btn-danger btn-sm" onclick="showAlert()" href="{{route('offers_delete',$offersitem->id)}}">Delete</a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

{{$Offers_data->links()}}



@endsection

<script>
  function showAlert() {
    alert("Are You Sure You Want To Delete this Item?");
  }
</script>