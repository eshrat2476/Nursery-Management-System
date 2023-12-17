@extends('Frontend.fronthome')

@section('content')



<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="visibility: visible; animation-delay: 0.1s; animation-name: fadeIn;">
    <div class="container text-center py-5">
        <h1 class="display-3 text-white mb-4  slideInDown">𓂀𝒞𝒶𝓇𝑒 & 𝒯𝒾𝓅𝕤𓂀</h1>
        <span style="color:white">𝑀𝑜𝓇𝑒 𝒫𝓁𝒶𝓃𝓉𝓈 𝐿𝑒𝓈𝓈 𝒫𝓇𝑜𝒷𝓁𝑒𝓂𝓈</span>

        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb justify-content-center mb-0">
                <li class="breadcrumb-item"><a href="{{route('Home')}}">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Care & Tips</li>
            </ol>
        </nav>
    </div>
</div>






<div class="container">
    <div class="row dd-flex justify-content-center">
        <div class="col-md-8">
            <div class="card px-3">
                <div class="row">
                    @foreach( $CareTips_data as $Plant_item)
                    <div class="col-md-6">

                        <div class="text-end"> <i class='fa fa-apple fs-1'></i>
                            <span class="fw-bold text-end">{{ $Plant_item->id}}</span>
                        </div>
                        <h1 class="fs-1 ms-1 mt-3">{{ $Plant_item->plantname}}</h1>

                        <div class="ms-1"> <span>{{ $Plant_item->caretips}}</span> </div>
                        <div class="ms-1"> <span>{{ $Plant_item->pesticides}}</span> </div>
                        <hr>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>


</div>

@endsection