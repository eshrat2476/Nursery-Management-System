@extends('Backend.Admin.Master')

@section('content')



<h1>Edit your product</h1>



<form action="{{route('plant_update',$Plant_item->id)}}" method="post" enctype="multipart/form-data">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="inputPlantName">Enter Plant Name</label>
        <input value="{{$Plant_item->plantname}}" type="text" class="form-control" id="" placeholder="Enter Plant Name" name="plantname">
        @error('plantname')
        <div class="alert alert-danger">{{ $message }}</div>
        @enderror
    </div>



    <div class="form-group">
        <label for="inputPlantPrice">Plant Price</label>
        <input value="{{$Plant_item->plantprice}}" type="number" class="form-control" name="plantprice" min="1" id="inputPlantPrice" aria-describedby="emailHelp" placeholder="Enter Price">
        <small id="emailHelp" class="form-text text-muted"></small>
        @error('plantprice')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <label for="quantity" class="required-star"> Quantity</label>
  <input  value="{{$Plant_item->quantity}}" type="number" class="form-control" name="quantity" min="1" id="inputPlantPrice"  placeholder="Enter quantity">
  <small id="quantity" class="form-text text-muted"></small>
  @error('plantprice')
  <div class="alert alert-danger">{{$message}}</div>
  @enderror
  </div>

    <div class="form-group">
        <label for="insertPlantImage">Plant Image</label>
        <input value="{{$Plant_item->plantimage}}" type="file" class="form-control" name="plantimage" id="insertPlantImage" placeholder="Insert Plant Image">
        @error('plantimage')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>



    <div class="form-group">
        <label for="selectplantcategory">Select Plant Category</label>
        <select class="form-control" name="category_name" id="">
            @foreach($Category_data as $plant_categoryitem)
            <option value="{{$plant_categoryitem->categoryname}}">{{$plant_categoryitem->categoryname}}</option>
            @endforeach
        </select>
        @error('category_name')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>



    <div class="form-group">
        <label for="inputPlantDescription">Plant Description</label>
        <input value="{{$Plant_item->plantdescription}}" type="text" class="form-control" name="plantdescription" id="inputPlantDescription" placeholder="Describe Something About This Plant">
        @error('plantdescription')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

<br>

  
    <button type="update" class="btn btn-primary">Update</button>
</form>


@endsection