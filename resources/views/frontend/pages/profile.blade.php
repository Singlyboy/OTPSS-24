@extends('frontend.master')

@section('content')


<div class="row gutters-sm">
    <div class="col-md-4 mb-3">
        <div class="card">
            <div class="card-body">
                <div class="d-flex flex-column align-items-center text-center">
                    <img src="https://bootdey.com/img/Content/avatar/avatar5.png" style="width: 350px;" alt="Admin" class="rounded-circle" width="150">
                    <div class="mt-3">
                        <h4>Name: {{auth('customerGuard')->user()->name}}</h4>
                        <p class="text-secondary mb-1">Email: {{auth('customerGuard')->user()->email}}</p>
                    </div>
                    <div class="about">
                        <h5>Mobile:</h5>
                        <p>{{auth('customerGuard')->user()->mobile}}</p>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
<div class="col-md-8">
<div class="row gutters-sm">
                <div class="card h-100">
                    <div class="card-body">

                        <h1>My Orders ({{ $orders->count() }})</h1>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Order Number</th>
                                    <th scope="col">Receiver Name</th>
                                    <th scope="col">Total Price</th>
                                    <th scope="col">Status</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                <tr>
                                    <th scope="row">{{$order->id}}</th>
                                    <th scope="row">{{$order->receiver_name}}</th>
                                    <td>{{$order->total_amount}}</td>
                                    <td>{{$order->status}}</td>
                                    <td>
                                        <a class="btn btn-primary" href="{{route('view.invoice',$order->id)}}">View Order</a>
                                        @if($order->status=='pending')
                                         <a class="btn btn-danger" href="{{route('cancel.order',$order->id)}}">Cancel Order</a>
                                     @endif
                                    </td>
                                </tr>
                                @endforeach


                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
</div>

    </div>
    




    @endsection