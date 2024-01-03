@extends('Frontend.fronthome')


@section('content')


<div class="container">
  <form action="{{route('customer.do.login')}}" method="post">
    @csrf


    <div class="form-group">
      <br>

      <h5 style="color: red;  display: flex;
      justify-content: center;
      margin: 0;">Please Register if you want to Login,Thank You!!</h5>
      <label for="exampleInputEmail1">Email address</label>
      <input required name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

    </div>
    <div class="form-group">
      <label for="exampleInputPassword1">Password</label>
      <input required name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
    </div>
    <br>

    <h5 style="color: green;">Already Registered?</h5>


    <button type="submit" class="btn btn-primary">Login</button>

  </form>

</div>

@endsection