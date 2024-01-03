@extends('Backend.Admin.Master')


@section('content')

<form action="{{route('users_update',$User_data->id)}}"  method="post">
    @csrf
    @method('put')
    
    <div class="form-group">
    <label for="inputuserName">Name</label>
    <input value="{{$User_data->name}}" type="text" class="form-control" name="name" id="inputuserName" aria-describedby="emailHelp" placeholder="Enter User Name">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('name')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <label for="inputUserEmail">Email</label>
    <input value="{{$User_data->email}}" type="email" class="form-control" name="email" id="inputUserEmail" aria-describedby="emailHelp" placeholder="Enter User Email">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('email')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>



  <div class="form-group">
    <label for="inputUserRole">Role</label>
     <select name="role" class="form-control" id="inputUserRole">
     <option>Select Your Role</option>
      <option value="Admin">Admin</option>
      <option value="Manager">Manager</option>
     </select>
    @error('role')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>


  
  <div class="form-group">
    <label for="inputpassword">Password</label>
    <input value="{{$User_data->password}}" type="password" class="form-control" name="password" id="inputpassword" placeholder="Enter password">
    @error('password')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

<br>

  <button type="submit" class="btn btn-primary">Submit</button>




</form>



@endsection