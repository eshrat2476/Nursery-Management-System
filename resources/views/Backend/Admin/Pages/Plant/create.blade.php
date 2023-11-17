@extends('Backend.Admin.Master')


@section('content')

<form action="{{route('admin_plants_store')}}"    method="post">
    @csrf
  <div class="form-group">
    <label for="inputPlantName">Plant Name</label>
    <input type="text" class="form-control" name="plantname" id="inputPlantName" aria-describedby="emailHelp" placeholder="Enter Plant Name">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('plantname')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <label for="inputPlantPrice">Plant Price</label>
    <input type="number" class="form-control" name="plantprice" id="inputPlantPrice" aria-describedby="emailHelp" placeholder="Enter Price">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('plantprice')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>


  <div class="form-group">
    <label for="insertPlantImage">Plant Image</label>
    <input type="file" class="form-control" name="plantimage" id="insertPlantImage" placeholder="Insert Plant Image">
    @error('plantimage')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>



  <div class="form-group">
    <label for="inputPlantDescription">Plant Description</label>
    <input type="text" class="form-control" name="plantdescription" id="inputPlantDescription" placeholder="Describe Something About This Plant">
    @error('plantdescription')
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