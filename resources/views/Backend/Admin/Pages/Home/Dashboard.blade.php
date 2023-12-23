@extends('Backend.Admin.Master')

@section('content')

<div class="container-fluid px-4">
    <h1 class="mt-4">Dashboard</h1>
    <div class="row">
        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Plants</div>
                <p>Total Plants:{{$plantsCount}}</p>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="{{route('admin_plants')}}">View Details</a>
                    <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Plant Category</div>
                <p>Total Category:{{$plantsCategoryCount}}</p>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="{{route('admin_categories')}}">View Details</a>
                    <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Care Tips</div>
                <p>Total Care&Tips:{{$careCount}}</p>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="{{route('admin_care_tips')}}">View Details</a>
                    <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>
        </div>


        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Offers</div>
                <p>Total offers:{{$offersCount}}</p>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="{{route('admin_offers')}}">View Details</a>
                    <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6">
            <div class="card bg-success text-white mb-4">
                <div class="card-body">Orders</div>
                <p>Total Orders:{{$ordersCount}}</p>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="{{route('admin_orders')}}">View Details</a>
                    <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>
        </div>



        <div class="col-xl-3 col-md-6">
            <div class="card bg-danger text-white mb-4">
                <div class="card-body">Users</div>
                <p>Total Users:{{$userCount}}</p>
                <div class="card-footer d-flex align-items-center justify-content-between">
                    <a class="small text-black stretched-link" href="{{route('admin_users')}}">View Details</a>
                    <div class="small text-white"><svg class="svg-inline--fa fa-angle-right" aria-hidden="true" focusable="false" data-prefix="fas" data-icon="angle-right" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 256 512" data-fa-i2svg=""><path fill="currentColor" d="M246.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-160 160c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L178.7 256 41.4 118.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l160 160z"></path></svg><!-- <i class="fas fa-angle-right"></i> Font Awesome fontawesome.com --></div>
                </div>
            </div>
        </div>
    </div>

        </div>
    </div>
</div>
@endsection
