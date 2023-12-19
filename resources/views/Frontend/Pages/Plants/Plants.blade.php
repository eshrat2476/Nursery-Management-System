@extends('Frontend.fronthome')

@section('content')


<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4  slideInDown">𓂀𝕆𝕦𝕣 ℙ𝕝𝕒𝕟𝕥𝕤𓂀</h1>
        <span style="color:white">𝑀𝑜𝓇𝑒 𝒫𝓁𝒶𝓃𝓉𝓈 𝐿𝑒𝓈𝓈 𝒫𝓇𝑜𝒷𝓁𝑒𝓂𝓈</span>

        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('Home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Plants</li>
            </ol>
        </nav>
        <div class="row">
            @foreach($Plant_data as $Plant_item)
                <div style="float: left; width: 250px;" class="card m-2">
                    <div class="col-md-8 offset-md-2 pt-5">
                    <img style="height:200px; width:300px;" src="{{url('uploads/',$Plant_item->plantimage)}}" alt="plantimage">
                    </div>
                    <div class="card-body text-center mx-auto">
                        <div class='cvp'>

                            <h5 class="card-title font-weight-bold">{{$Plant_item->plantname}}</h5>
                            <!-- Product reviews-->
                            <div class="d-flex justify-content-center small text-warning mb-2">
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                                <div class="bi-star-fill"></div>
                            </div>


                            <p class="card-text">Tk {{$Plant_item->plantprice}} .BDT</p>
                            <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('add_toCart',$Plant_item->id)}}">Add to cart</a></div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</div>






@endsection