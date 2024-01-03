@extends('Backend.Admin.Master')


@section('content')

<form action="{{route('categories_update',$Category_data->id)}}"  method="post">
    @csrf
    @method('put')
    
  <div class="form-group">
    <label for="inputCategoryName">Category Name</label>
    <input value="{{$Category_data->categoryname}}"  type="text" class="form-control" name="categoryname" id="inputCategoryName" aria-describedby="emailHelp" placeholder="Enter Plant Name">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('categoryname')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>



  <div class="form-group">
    <label for="inputCategoryDescription">Category Description</label>
    <input  value="{{$Category_data->categorydescription}}"  type="text" class="form-control" name="categorydescription" id="inputCategoryDescription" placeholder="Describe Something About This Category">
    @error('categorydescription')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

 <br>
 
  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection