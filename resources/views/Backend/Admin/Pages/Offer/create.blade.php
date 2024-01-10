@extends('Backend.Admin.Master')


@section('content')


<form action="{{route('admin_offers_store')}}"  method="post">
    @csrf
  <div class="form-group">
    <label for="inputPlantName" class="required-star">Plant Name</label>
    <input type="text" name="plantname" class="form-control" id="inputPlantName" aria-describedby="emailHelp" placeholder="Enter Plant Name">
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


  <div class="form-group">
    <label for="inputOriginalPrice" class="required-star">Original price</label>
    <input type="number" name="originalprice" class="form-control" min="1" id="inputOriginalPrice" aria-describedby="emailHelp" placeholder="Input Original Price">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('originalprice')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>


  <div class="form-group">
    <label for="inputOfferPrice" class="required-star">offer Price</label>
    <input type="number" name="offerprice" class="form-control" min="1" id="inputOfferPrice" aria-describedby="emailHelp" placeholder="Input Offer Price">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('offerprice')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  


  <div class="form-group">
    <label for="inputStatus" class="required-star">Status</label>
    <input type="text" name="offerstatus" class="form-control" id="inputStatus" aria-describedby="emailHelp" placeholder="Update Status">
    <small id="emailHelp" class="form-text text-muted"></small>
    @error('offerstatus')
    <div class="alert alert-danger">{{$message}}</div>
    @enderror
  </div>
  <br>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection

