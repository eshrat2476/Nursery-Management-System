
@extends('Frontend.fronthome')

@section('carousel')

@include('Frontend.Partials.carousel')


<!-- Chikon box -->

<div class="container-fluid top-feature py-5 pt-lg-0">
        <div class="container py-5 pt-lg-0">
            <div class="row gx-0">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.1s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-heart text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Free Decor Ideas</h4>
                                <span>Plants Instantly Attract the Eye & Calm the Soul</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-users text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>Dedicated Team</h4>
                                <span>Our Goal is Your Satisfaction</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="bg-white shadow d-flex align-items-center h-100 px-5" style="min-height: 160px;">
                        <div class="d-flex">
                            <div class="flex-shrink-0 btn-lg-square rounded-circle bg-light">
                                <i class="fa fa-phone text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h4>24/7 Available</h4>
                                <span>At your Service</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<!-- chikon box end -->



@endsection

@section('content')


@include('Frontend.Pages.Plants.Plants')

@endsection



