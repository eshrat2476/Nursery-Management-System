@extends('Backend.Admin.Master')


@section('content')

<form action="{{route('admin_user_store')}}"    method="post">
    @csrf
  <div class="form-group">
    <label for="inputuserName" class="required-star">Name</label>
    <input type="text" class="form-control" name="name" id="inputuserName" aria-describedby="emailHelp" placeholder="Enter User Name">
    <style>
            .required-star::after {
                content: '*';
                color: red;
                margin-right: 2px;
            }
        </style>
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('name')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <label for="inputUserEmail" class="required-star">Email</label>
    <input type="email" class="form-control" name="email" id="inputUserEmail" aria-describedby="emailHelp" placeholder="Enter User Email">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('email')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>



  <div class="form-group">
    <label for="inputUserRole" class="required-star">Role</label>
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
    <label for="inputpassword" class="required-star">Password</label>
    <input type="password" class="form-control" name="password" id="inputpassword" placeholder="Enter password">
    @error('password')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <br>


  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection