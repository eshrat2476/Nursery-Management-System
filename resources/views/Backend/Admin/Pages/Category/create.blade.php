@extends('Backend.Admin.Master')


@section('content')

<form action="{{route('admin_categories_store')}}"    method="post">
    @csrf
  <div class="form-group">
    <label for="inputCategoryName">Category Name</label>
    <input type="text" class="form-control" name="categoryname" id="inputCategoryName" aria-describedby="emailHelp" placeholder="Enter Plant Name">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('categoryname')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>



  <div class="form-group">
    <label for="inputCategoryDescription">Category Description</label>
    <input type="text" class="form-control" name="categorydescription" id="inputCategoryDescription" placeholder="Describe Something About This Category">
    @error('categorydescription')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  
  <div class="form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection