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


    <div class="form-check">
        <input type="checkbox" class="form-check-input" id="exampleCheck1">
        <label class="form-check-label" for="exampleCheck1">Check me out</label>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection