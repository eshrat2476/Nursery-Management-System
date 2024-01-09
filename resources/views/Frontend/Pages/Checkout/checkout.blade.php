@extends('Frontend.fronthome')

@section('content')

<div class="container wrapper">
    <form action="{{route('order_place')}}" method="post">
        @csrf
        <div class="row">
            <div class="col-md-3">

            </div>

            <div class="col-md-6 col-sm-6 col-xs-12 col-md-pull-6 col-sm-pull-6">


                <!--SHIPPING METHOD-->
                <div class="panel panel-info">
                    <div class="panel-heading">Address</div>
                    <div class="panel-body">
                        <div class="form-group">
                            <div class="col-md-12">
                                <h4>Shipping Address</h4>
                            </div>
                        </div>

                        <div class="form-group">

                            <div class="span1"></div>
                            <div class="col-md-6 col-xs-12">
                                <strong class="required-star"> Name:</strong>
                                <input type="text" name="name"  required  class="form-control" value="{{auth()->user()->name}}" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong class="required-star">Address:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="address" required  class="form-control" value="" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong class="required-star">City:</strong></div>
                            <div class="col-md-12">
                                <input type="text" name="city"  required  class="form-control" value="" />
                            </div>
                        </div>


                        <div class="form-group">
                            <div class="col-md-12"><strong class="required-star">Phone Number:</strong></div>
                            <div class="col-md-12"><input type="text" name="phone_number" required   class="form-control" value="">
                                <style>
                                    .required-star::after {
                                        content: '*';
                                        color: red;
                                        margin-right: 2px;
                                    }
                                </style>
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-12"><strong class="required-star">Email Address:</strong></div>
                            <div class="col-md-12"><input type="text" name="email_address"  required   class="form-control" value="{{auth()->user()->email}}" /></div>
                        </div>
                        <div class="form-group">
                            <label for="InputPaymentMethod"><strong class="required-star">Payment Method:</strong></label>
                            <select name="payment_method" id="" class="form-control" required>
                                <option value="Bkash">Bkash</option>
                                <option value="Rocket">Rocket</option>
                                <option value="COD">COD</option>
                            </select>
                        </div>
                    </div>
                </div>


                <!--SHIPPING METHOD END-->
                <!--CREDIT CART PAYMENT-->
                <div class="panel panel-info">

                    <div class="panel-body">


                        <div class="form-group">
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <br>
                                <button type="submit" class="btn btn-primary btn-submit-fix">Place Order</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!--CREDIT CART PAYMENT END-->
            </div>

            <div class="col-md-3">

            </div>
        </div>
    </form>

</div>

@endsection