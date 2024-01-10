@extends('Backend.Admin.Master')


@section('content')

<form action="{{route('admin_plants_store')}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="inputPlantName" class="required-star">Plant Name</label>
    <input type="text" class="form-control" name="plantname" id="inputPlantName" aria-describedby="emailHelp" placeholder="Enter Plant Name">
    <style>
            .required-star::after {
                content: '*';
                color: red;
                margin-right: 2px;
            }
        </style>
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('plantname')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

  <label for="inputPlantPrice" class="required-star">Plant Price</label>
  <input type="number" class="form-control" name="plantprice" min="1" id="inputPlantPrice" aria-describedby="emailHelp" placeholder="Enter Price">
  <small id="emailHelp" class="form-text text-muted"></small>
  @error('plantprice')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>

  <label for="quantity" class="required-star"> Quantity</label>
  <input type="number" class="form-control" name="quantity" min="1" id="inputPlantPrice"  placeholder="Enter quantity">
  <small id="quantity" class="form-text text-muted"></small>
  @error('plantprice')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>

  <div class="form-group">
    <label for="insertPlantImage" class="required-star">Plant Image</label>
    <input type="file" class="form-control" name="plantimage" id="insertPlantImage" placeholder="Insert Plant Image">
    @error('plantimage')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>


  <!-- dynamic category -->



  <div class="form-group">
    <label for="selectplantcategory" class="required-star">Plant Category</label>
    <select class="form-control" name="category_id" id="">
      <option value="">select One</option>
      @forelse($plant_category as $plant_categoryitem)
      <option value="{{$plant_categoryitem->id}}">{{$plant_categoryitem->categoryname}}</option>
      @empty
      <option value="">Not found</option>
      @endforelse
    </select>
    @error('category_id')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>



  

  <div class="form-group">
    <label for="inputPlantDescription" class="required-star">Plant Description</label>
    <input type="text" class="form-control" name="plantdescription" id="inputPlantDescription" placeholder="Describe Something About This Plant">
    @error('plantdescription')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>

<br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection