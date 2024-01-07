@extends('Backend.Admin.Master')


@section('content')

<form action="{{route('admin_categories_store')}}"    method="post">
    @csrf
  <div class="form-group">
    <label for="inputCategoryName" class="required-star">Category Name</label>
    <input type="text" class="form-control" name="categoryname" id="inputCategoryName" aria-describedby="emailHelp" placeholder="Enter Plant Name">
    <style>
            .required-star::after {
                content: '*';
                color: red;
                margin-right: 2px;
            }
        </style>
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('categoryname')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>



  <div class="form-group">
    <label for="inputCategoryDescription" class="required-star">Category Description</label>
    <input type="text" class="form-control" name="categorydescription" id="inputCategoryDescription" placeholder="Describe Something About This Category">
    @error('categorydescription')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <br>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection