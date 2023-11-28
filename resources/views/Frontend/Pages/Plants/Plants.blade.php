@extends('Frontend.fronthome')

@section('content')


<h1>Our Plants</h1>
<span>gujgj</span>


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

    @foreach($Plant_data as $Plant_item)
    <div class='container-fluid'>
        <div class="card mx-auto col-md-3 col-10 mt-5">
            <img style="height:60px; width:60px;" src="{{url('uploads/',$Plant_item->plantimage)}}" alt="plantimage">

            <div class="card-body text-center mx-auto">
                <div class='cvp'>

                    <h5 class="card-title font-weight-bold">{{$Plant_item->plantname}}</h5>
                    <p class="card-text">{{$Plant_item->plantprice}}</p>
                    <a href="#" class="btn details px-auto">view details</a><br />
                    <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="{{route('add_toCart',$Plant_item->id)}}">Add to cart</a></div>
                </div>
            </div>
        </div>

    </div>

    @endforeach



</div>








@endsection