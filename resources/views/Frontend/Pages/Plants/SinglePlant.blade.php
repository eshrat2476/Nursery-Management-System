@extends('Frontend.fronthome')

@section('content')




<div class="container">
    <div class="row dd-flex justify-content-center">
        <div class="col-md-8">
            <div class="card px-3">
                <div class="row">
                    <div class="col-md-6">
                        <div class="d-flex flex-row align-items-center"> <i class='fa fa-apple fs-1'></i>
                         <span class="fw-bold ms-1 fs-5">{{$singlePlantItem->id}}</span> </div>
                        <h1 class="fs-1 ms-1 mt-3">{{$singlePlantItem->plantname}}</h1>
                        <div class="ms-1"> <span>{{$singlePlantItem->plantprice}}.BDT</span> </div>
                        <div class="ms-1"> <span>{{$singlePlantItem->plantimage}}</span> </div>
                        <div class="ms-1"> <span>{{$singlePlantItem->plantcategory}}</span> </div>
                        <div class="ms-1"> <span>{{$singlePlantItem->plantdescription}}</span> </div>
                        <div class="mt-5 radio-buttons"> <label class="radio"> <input type="radio" name="code" value="grey" checked> <span></span> </label> <label class="radio"> <input type="radio" name="code" value="pink"> <span></span> </label> <label class="radio"> <input type="radio" name="code" value="black"> <span></span> </label> </div>
                        {{-- <div> <button class="button"><span>Add to Cart</span> <i class="ms-2 fa fa-long-arrow-right"></i> </button> </div> --}}
                            
                        <div class="mt-5 radio-buttons"> 
                            <a class="btn btn-danger p-0" href="{{ route('add_toCart',$singlePlantItem->id) }}">AddToCart</a>
                        </div>
                        
                    </div>
                    <div class="col-md-6">
                        <div class="item-image"> <img src="{{url('uploads/'.$singlePlantItem->plantimage)}}"> </div>
                        {{-- ('uploads/', $Plant_data->image) --}}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
