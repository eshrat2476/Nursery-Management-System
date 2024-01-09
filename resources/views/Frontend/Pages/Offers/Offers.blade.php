@extends('Frontend.fronthome')

@section('content')


<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4  slideInDown">𓂀𝕆𝕦𝕣 𝒪𝒻𝒻𝑒𝓇𝓈𓂀</h1>
        <span style="color:white">𝑀𝑜𝓇𝑒 𝒫𝓁𝒶𝓃𝓉𝓈 𝐿𝑒𝓈𝓈 𝒫𝓇𝑜𝒷𝓁𝑒𝓂𝓈</span>

        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('Home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Offers</li>
            </ol>
        </nav>
    </div>
</div>


<div class="container">

    <style>
        body {
            background: #E0E0E0;
        }

        .details {
            border: 1.5px solid grey;
            color: #212121;
            width: 100%;
            height: auto;
            box-shadow: 0px 0px 10px #212121;
        }

        .cart {
            background-color: #212121;
            color: white;
            margin-top: 10px;
            font-size: 12px;
            font-weight: 900;
            width: 100%;
            height: 39px;
            padding-top: 9px;
            box-shadow: 0px 5px 10px #212121;
        }

        .card {
            width: fit-content;
        }

        .card-body {
            width: fit-content;
        }

        .btn {
            border-radius: 0;
        }

        .img-thumbnail {
            border: none;
        }

        .card {
            box-shadow: 0 20px 40px rgba(0, 0, 0, .2);
            border-radius: 5px;
            padding-bottom: 10px;
        }
    </style>
    <div>
        @foreach($Offers_data as $Plant_item)
        <div style="float: left; width: 250px;" class="card m-2">
            <div class="col-md-8 offset-md-2 pt-5">
                <div class="card-body text-center mx-auto">
                    <div class='cvp'>

                        <h5 class="card-title font-weight-bold">{{$Plant_item->plantname}}</h5>
                        <p class="card-text" style="color: red;">{{$Plant_item->offerstatus}}</p>
                        <p class="card-text">Tk {{$Plant_item->originalprice}} .BDT</p>
                        <p class="emoji-text">&#x1F60D;Tk {{$Plant_item->offerprice}} .BDT</p>

                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('add_toCart',$Plant_item->id)}}">Add to cart</a></div>
                    </div>
                </div>
            </div>
        </div>

        @endforeach

    </div>
</div>


@endsection