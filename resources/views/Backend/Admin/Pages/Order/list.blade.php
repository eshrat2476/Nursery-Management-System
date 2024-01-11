@extends('Backend.Admin.Master')

@section('content')




<h1>Order list</h1>

<br>


<table class="table">
  <thead class="thead-light">
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Reciver Name</th>
      <th scope="col">Reciver Mobile</th>
      <th scope="col">Reciver Email</th>
      <th scope="col">Address</th>
      <th scope="col">Payment Method</th>
      <th scope="col">Total Price</th>
      <th scope="col">Order Note</th>
      <th scope="col">Payment Status</th>
      <th scope="col">Order Status</th>
      <th scope="col">Deliveryman</th>
      <th scope="col">Action</th>


      </tr>
  </thead>
  <tbody>
    @foreach( $order_data as $Order_item)
    <tr>
      <th scope="row">{{$Order_item->id}}</th>
      <td>{{$Order_item->receiver_name}}</td>
      <td>{{$Order_item->receiver_mobile}}</td>
      <td>{{$Order_item->receiver_email}}</td>
      <td>{{$Order_item->address}}</td>
      <td>{{$Order_item->payment_method}}</td>
      <td>{{$Order_item->total_price}}</td>
      <td>{{$Order_item->order_note}}</td>
      <td>{{$Order_item->payment_status}}</td>
      <td>{{$Order_item->status}}</td>
      <td>{{$Order_item->deliverymen}}</td>



      

      <td>


      <a class ="btn btn-primary btn-sm" href="{{route('orders_view',$Order_item->id)}}">View</a>
      
        

      </td>
    </tr>
    @endforeach
  </tbody>
</table>

@endsection