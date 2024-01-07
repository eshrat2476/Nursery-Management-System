@extends('Frontend.fronthome')

@section('content')
<br>

<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4  slideInDown"></h1>
        <span style="color:white">𝑀𝑜𝓇𝑒 𝒫𝓁𝒶𝓃𝓉𝓈 𝐿𝑒𝓈𝓈 𝒫𝓇𝑜𝒷𝓁𝑒𝓂𝓈</span>

        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('Home')}}">Home</a></li>
            </ol>
        </nav>
    </div>
</div>



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