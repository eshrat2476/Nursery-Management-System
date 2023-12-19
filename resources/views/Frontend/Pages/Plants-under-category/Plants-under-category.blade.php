@extends('Frontend.fronthome')

@section('content')

<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">


    @if($plantsUnderCategory->count()>0)

    @foreach ($plantsUnderCategory as $plants)

    <div class="col mb-5">
        <div class="card h-100">

            <!-- Product image-->
            <a href="">
                <img class="card-img-top" src="{{url('/uploads/'.$plants->plantimage)}}" alt="..." />
                <!-- Product details-->
                <div class="card-body p-4">
                    <div class="text-center">
                        <!-- Product name-->
                        <h5 class="fw-bolder">{{$plants->plantname}}</h5>


                        <!-- Product description-->
                        {{ $plants->plantdescription }}

                        <br>

                        <!-- Product description-->
                        {{ $plants->plantprice }} .BDT


                    </div>
                </div>
            </a>

            <!-- Product actions-->
            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('add_toCart',$plants->id)}}">Add to cart</a></div>
            </div>
        </div>
    </div>
    @endforeach

    @else

    <h1>This Category has no Plants</h1>
    @endif




</div>
@endsection