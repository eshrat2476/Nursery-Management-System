@extends('Backend.Admin.Master')

@section('content')




<form action="{{route('Delivery.store')}}" method="post">
    @csrf <div class="form-group">
        <label for="InputCustomerName">Deliveryman name </label>
        <input type="text" class="form-control" name="name" id="InputCustomerName" aria-describedby="emailHelp" placeholder="Enter your name">
        <small id="emailHelp" class="form-text text-muted">Enter your name</small>
    </div>


    <div class="form-group">
        <label for="InputCustomerEmail"> address </label>
        <input type="text" class="form-control" name="address" id="InputCustomerEmail" aria-describedby="emailHelp" placeholder="Enter your address">
        <small id="emailHelp" class="form-text text-muted">Enter your email address</small>
    </div>


    <div class="form-group">
        <label for="InputCustomerNumber">Contact number </label>
        <input type="number" class="form-control" name="number" id="InputCustomerNumber" aria-describedby="emailHelp" placeholder="Enter your number">
        <small id="emailHelp" class="form-text text-muted">Enter your Number</small>
    </div>


    <div class="form-group">
        <label for="exampleInputPassword1">Password</label>
        <input type="password" class="form-control" name="password" id="exampleInputPassword1" placeholder="Password">
    </div>



    <button type="submit" class="btn btn-primary">Submit</button>
</form>


@endsection