@extends('frontend.master')

@section('content')

<div class="container">
  <div class="py-5 text-center">
  <h2>Checkout form</h2>
  </div>

  <hr>
  <div class="row">
    <div class="col-md-4 order-md-2 mb-4">
      <h4 class="d-flex justify-content-between align-items-center mb-3">
        <span class="text-muted">Your cart</span>
        <span class="badge badge-secondary badge-pill">3</span>
      </h4>
      @foreach ($myCart as $chackData)

      <ul class="list-group mb-3">
        <li class="list-group-item d-flex justify-content-between lh-condensed">
          <div>
            <h6 class="my-0">{{ $chackData['parts_name'] }}</h6>
          
          </div>
          <span class="text-muted">Price:{{ $chackData['subtotal'] }}</span>
        </li>
       @endforeach
        <li class="list-group-item d-flex justify-content-between">
          <span>Total (BDT)</span>
          <strong>
          {{ session()->has('basket')  ? array_sum(array_column(session()->get('basket'),'subtotal')):0}}
          </strong>
        </li>
      </ul>

        </div>
    <form action="{{route('order.place')}}" method="post">
    @csrf

    <div class="col-md-8 order-md-1">
      <h4 class="mb-3">Billing address</h4>
      <form class="needs-validation" novalidate>
        <div class="row">

          <div class="col-md-6 mb-3">
            <label for="firstName">Receiver name</label>
            <input name="receiver_name" type="text" class="form-control" id="" placeholder="" value="" required>
            </div>
          </div>
          
        <div class="mb-3">
          <label for="email">Email <span class="text-muted">(Optional)</span></label>
          <input name="email" type="email" class="form-control" id="email" placeholder="you@example.com">
          
          </div>
    

        <div class="mb-3">
          <label for="address">Address</label>
          <input name="address" type="text" class="form-control" id="address" placeholder="1234 Main St" required>
          
          </div>
      

      
        <hr class="mb-4">

        <h4 class="mb-3">Payment</h4>

        <div class="d-block my-3">
          <div class="custom-control custom-radio">
            <input id="credit" name="paymentMethod" value="cod" type="radio" class="custom-control-input" checked required>
            <label class="custom-control-label" for="credit">Cash on Delivery (COD)</label>
          </div>
          <div class="custom-control custom-radio">
            <input id="debit" name="paymentMethod" value="online"  type="radio" class="custom-control-input" required>
            <label class="custom-control-label" for="debit">Online Payment</label>
          </div>
          </div>
        
        <hr class="mb-4">
        <button class="btn btn-primary btn-lg btn-block" type="submit">Order Now</button>
      </form>
    </div>
  </div>

@endsection