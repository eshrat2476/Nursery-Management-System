@extends('Frontend.fronthome')

@section('content')


<div class="container">
    <div class="row">
        <div class="col-xs-12">
            <div class="invoice-title">
                {{-- <h2>Invoice</h2><h3 class="pull-right">{{$order->id}}</h3> --}}
            </div>
            <hr>
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <address>
                            <strong>Billed To:</strong><br>
                            {{$order->user_id}}<br>
                            {{$order->address}}<br>
                        </address>
                    </div>
                    <div class="col-md-6 text-right">
                        <address>
                            <strong>Shipped To:</strong>
                            <br>{{$order->user_id}}<br>
                            <b>Address: {{$order->receiver_address}}</b><br>
                            {{$order->receiver_email}}<br>
                            {{$order->receiver_mobile}}<br>
                            {{$order->receiver_name}}<br>
                            {{$order->payment_status}}<br>
                            {{$order->transaction_id}}<br>
                            {{$order->status}}<br>
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
                        {{$order->payment_method}}<br>
                    </address>
                </div>
                <div class="col-md-6 text-right">
                    <address>
                        <strong>Order Date:</strong><br>
                        {{$order->created_at}}<br><br>
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
                                    <th class="text-center" scope="col">PlantId</th>
                                    <th class="text-center" scope="col">Quantity</th>
                                    <th class="text-end" scope="col">Price</th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach($orderdetails as $item)
                                <tr class="border">
                                    <td class="text-center">{{$item->id}}</td>
                                    <td class="text-center">{{$item->plant_id}}</td>
                                    <td class="text-center">{{$item->quantity}}</td>
                                    <td class="text-end">{{$item->subtotal}}</td>
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