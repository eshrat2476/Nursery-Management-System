@extends('Backend.Admin.Master')


@section('content')

<form action="{{route('offers_update',$Offers_data->id)}}"  method="post">
    @csrf
    @method('put')
    
    <div class="form-group">
    <label for="inputPlantName">Plant Name</label>
    <input value="{{$Offers_data->plantname}}"  type="text" name="plantname" class="form-control" id="inputPlantName" aria-describedby="emailHelp" placeholder="Enter Plant Name">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('plantname')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>


  <div class="form-group">
    <label for="inputOriginalPrice">Original price</label>
    <input value="{{$Offers_data->originalprice}}" type="number" name="originalprice" class="form-control" id="inputOriginalPrice" aria-describedby="emailHelp" placeholder="Input Original Price">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('originalprice')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>


  <div class="form-group">
    <label for="inputOfferPrice">offer Price</label>
    <input value="{{$Offers_data->offerprice}}" type="number" name="offerprice" class="form-control" id="inputOfferPrice" aria-describedby="emailHelp" placeholder="Input Offer Price">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('offerprice')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  


  <div class="form-group">
    <label for="inputStatus">Status</label>
    <input value="{{$Offers_data->offerstatus}}" type="text" name="offerstatus" class="form-control" id="inputStatus" aria-describedby="emailHelp" placeholder="Update Status">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('offerstatus')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  



  <button type="submit" class="btn btn-primary">Submit</button>




</form>



@endsection