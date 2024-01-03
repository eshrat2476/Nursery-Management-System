@extends('Backend.Admin.Master')

@section('content')




<form action="{{route('admin_care_tips_store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="enterPlantName">Plant Name</label>
        <input type="text" name="plantname" class="form-control" id="enterPlantName" aria-describedby="emailHelp" placeholder="Enter Plant Name">
        <small id="emailHelp" class="form-text text-muted"></small>
        @error('plantname')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>


    <div class="form-group">
        <label for="enputPlantCareTips">Care & Tips</label>
        <input type="text" name="caretips" class="form-control" id="enputPlantCareTips" placeholder="Enter Some Usefull Care & Tips for Plant">
        @error('caretips')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>



    <div class="form-group">
        <label for="enputPlantPesticides">Pesticides</label>
        <input type="text" name="pesticides" class="form-control" id="enputPlantPesticides" placeholder="Enter Needed Pesticides for Plants">
        @error('pesticides')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection