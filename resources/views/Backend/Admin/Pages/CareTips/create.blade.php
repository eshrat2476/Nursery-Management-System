@extends('Backend.Admin.Master')

@section('content')




<form action="{{route('admin_care_tips_store')}}" method="post">
    @csrf
    <div class="form-group">
        <label for="enputPlantName" class="required-star">Plant Name</label>
        <input type="text" name="plantname" class="form-control" id="enputPlantName" aria-describedby="emailHelp" placeholder="Enter Plant Name">

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
        <label for="enputPlantCareTips" class="required-star">Care & Tips</label>
        <input type="text" name="caretips" class="form-control" id="enputPlantCareTips" placeholder="Enter Some Usefull Care & Tips for Plant">
        @error('caretips')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>



    <div class="form-group">
        <label for="enputPlantPesticides" class="required-star">Pesticides</label>
        <input type="text" name="pesticides" class="form-control" id="enputPlantPesticides" placeholder="Enter Needed Pesticides for Plants">
        @error('pesticides')
        <div class="alert alert-danger">{{$message}}</div>
        @enderror
    </div>

    <br>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>






@endsection