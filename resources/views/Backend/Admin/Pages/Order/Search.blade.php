@extends('Backend.Admin.Master')

@section('content')


<br>

<h4>Search result for : {{ request()->search }} found {{$plants->count()}} plants.</h4>
<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">



    @if($plants->count()>0)
    @foreach ($plants as $plants)

    <div class="col mb-5">
        <div class="card h-100">




            <!-- Product details-->
            <div class="card-body p-4">
                <div class="text-center">


                    <!-- Product name-->
                    <h5 class="fw-bolder">{{$plants->id}}</h5>





                </div>
            </div>
            </a>


            @endforeach

            @else

            <h1>No product found.</h1>
            @endif

        </div>
    </div>
    @endsection