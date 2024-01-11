@extends('Frontend.fronthome')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">
                <br>
                <h1>Invoice</h1>
                {{-- <h2>Invoice</h2><h3 class="pull-right">{{$order->id}}</h3> --}}
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <strong>Billed To:</strong><br>
                            <b>{{$order->user_id}}</b><br>
                            <b>{{$order->address}}</b><br>
                        </address>
                    </div>
                    <div class="col-md-6 text-right">
                        <address>
                            <strong>Shipped To:</strong>
                            <br><b>{{$order->user_id}}</b><br>
                            <b>{{$order->receiver_name}}</b><br>
                            <b>Address: {{$order->address}}</b><br>
                            <b>{{$order->receiver_email}}</b><br>
                           <b>Phone-No: {{$order->receiver_mobile}}</b><br>
                           <b>{{$order->transaction_id}}</b><br>
                            <br>
                            {{$order->order_note}}<br>

                        </address>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <address>
                        <strong>Payment Method:</strong><br>
                        <b>{{$order->payment_method}}</b><br>
                    </address>
                </div>
                <div class="col-md-6 text-right">
                    <address>
                        <strong>Order Date:</strong><br>
                        <b>{{$order->created_at}}</b><br><br>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" scope="col">Id</th>
                                    <th class="text-center" scope="col">PlantName</th>
                                    <th class="text-center" scope="col">Quantity</th>
                                    <th class="text-end" scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($orderdetails as $item)
                                <tr class="border">
                                    <td class="text-center"><b>{{$item->id}}</b></td>
                                    <td class="text-center"><b>{{$item->plant->plantname}}</b></td>
                                    <td class="text-center"><b>{{$item->quantity}}</b></td>
                                    <td class="text-end"><b>{{$item->subtotal+'70'}}</b></td>
                                </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection