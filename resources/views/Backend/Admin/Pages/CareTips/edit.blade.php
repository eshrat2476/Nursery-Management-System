@extends('Backend.Admin.Master')


@section('content')

<form action="{{route('care-tips_update',$CareTips_data->id)}}"  method="post">
    @csrf
    @method('put')
    
    <div class="form-group">
        <label for="enterPlantName">Plant Name</label>
        <input value="{{$CareTips_data->plantname}}" type="text" name="plantname" class="form-control" id="enterPlantName" aria-describedby="emailHelp" placeholder="Enter Plant Name">
        <small id="emailHelp" class="form-text text-muted"></small>
        @error('plantname')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>


    <div class="form-group">
        <label for="enputPlantCareTips">Care & Tips</label>
        <input value="{{$CareTips_data->caretips}}" type="text" name="caretips" class="form-control" id="enputPlantCareTips" placeholder="Enter Some Usefull Care & Tips for Plant">
        @error('caretips')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>



    <div class="form-group">
        <label for="enputPlantPesticides">Pesticides</label>
        <input value="{{$CareTips_data->pesticides}}" type="text" name="pesticides" class="form-control" id="enputPlantPesticides" placeholder="Enter Needed Pesticides for Plants">
        @error('pesticides')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>


<br>

  
    <button type="submit" class="btn btn-primary">Submit</button>
</form>



@endsection