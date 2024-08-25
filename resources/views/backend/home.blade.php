@extends('backend.master')


@section('content')

<style>
 
.dbox {
    position: relative;
    background: rgb(255, 86, 65);
    background: -moz-linear-gradient(top, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
    background: -webkit-linear-gradient(top, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
    background: linear-gradient(to bottom, rgba(255, 86, 65, 1) 0%, rgba(253, 50, 97, 1) 100%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#ff5641', endColorstr='#fd3261', GradientType=0);
    border-radius: 4px;
    text-align: center;
    margin: 60px 0 50px;
}
.dbox__icon {
    position: absolute;
    transform: translateY(-50%) translateX(-50%);
    left: 50%;
}
.dbox__icon:before {
    width: 75px;
    height: 75px;
    position: absolute;
    background: #fda299;
    background: rgba(253, 162, 153, 0.34);
    content: '';
    border-radius: 50%;
    left: -17px;
    top: -17px;
    z-index: -2;
}
.dbox__icon:after {
    width: 60px;
    height: 60px;
    position: absolute;
    background: #f79489;
    background: rgba(247, 148, 137, 0.91);
    content: '';
    border-radius: 50%;
    left: -10px;
    top: -10px;
    z-index: -1;
}
.dbox__icon > i {
    background: #ff5444;
    border-radius: 50%;
    line-height: 40px;
    color: #FFF;
    width: 40px;
    height: 40px;
	font-size:22px;
}
.dbox__body {
    padding: 50px 20px;
}
.dbox__count {
    display: block;
    font-size: 30px;
    color: #FFF;
    font-weight: 300;
}
.dbox__title {
    font-size: 13px;
    color: #FFF;
    color: rgba(255, 255, 255, 0.81);
}
.dbox__action {
    transform: translateY(-50%) translateX(-50%);
    position: absolute;
    left: 50%;
}
.dbox__action__btn {
    border: none;
    background: #FFF;
    border-radius: 19px;
    padding: 7px 16px;
    text-transform: uppercase;
    font-weight: 500;
    font-size: 11px;
    letter-spacing: .5px;
    color: #003e85;
    box-shadow: 0 3px 5px #d4d4d4;
}


.dbox--color-2 {
    background: rgb(252, 190, 27);
    background: -moz-linear-gradient(top, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
    background: -webkit-linear-gradient(top, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
    background: linear-gradient(to bottom, rgba(252, 190, 27, 1) 1%, rgba(248, 86, 72, 1) 99%);
    filter: progid: DXImageTransform.Microsoft.gradient( startColorstr='#fcbe1b', endColorstr='#f85648', GradientType=0);
}
.dbox--color-2 .dbox__icon:after {
    background: #fee036;
    background: rgba(254, 224, 54, 0.81);
}
.dbox--color-2 .dbox__icon:before {
    background: #fee036;
    background: rgba(254, 224, 54, 0.64);
}
.dbox--color-2 .dbox__icon > i {
    background: #fb9f28;
}

.dbox--color-3 {
    background: rgb(183,71,247);
    background: -moz-linear-gradient(top, rgba(183,71,247,1) 0%, rgba(108,83,220,1) 100%);
    background: -webkit-linear-gradient(top, rgba(183,71,247,1) 0%,rgba(108,83,220,1) 100%);
    background: linear-gradient(to bottom, rgba(183,71,247,1) 0%,rgba(108,83,220,1) 100%);
    filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#b747f7', endColorstr='#6c53dc',GradientType=0 );
}
.dbox--color-3 .dbox__icon:after {
    background: #b446f5;
    background: rgba(180, 70, 245, 0.76);
}
.dbox--color-3 .dbox__icon:before {
    background: #e284ff;
    background: rgba(226, 132, 255, 0.66);
}
.dbox--color-3 .dbox__icon > i {
    background: #8150e4;
}     
</style>

<h1>Dashboard</h1>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->


<div class="container">
	<div class="row">
		<div class="col-md-3">
			<div class="dbox dbox--color-1">
				<div class="dbox__icon">
					<i class="	glyphicon glyphicon-user"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">{{$customerCount}}</span>
					<span class="dbox__title">Total Customers</span>
				</div>
				
				<div class="dbox__action">
					<a class="dbox__action__btn" href="{{route('customer.list')}}">More Info</a>
         
				</div>				
			</div>
		</div>
		<div class="col-md-3">
			<div class="dbox dbox--color-2">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-usd"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">{{$totalSale}}</span>
					<span class="dbox__title">Total Sale</span>
				</div>
				
				<div class="dbox__action">
        <a class="dbox__action__btn" href="{{route('order.list')}}">More Info</a>
				</div>				
			</div>
		</div>
		<div class="col-md-3">
			<div class="dbox dbox--color-3">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-heart"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">{{ $partsCount}}</span>
					<span class="dbox__title">Total Parts</span>
				</div>
				
				<div class="dbox__action">
        <a class="dbox__action__btn" href="{{route('parts.list')}}">More Info</a>
				</div>				
			</div>
		</div>
    <div class="col-md-3">
			<div class="dbox dbox--color-4">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-download"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">{{$orderCount}}</span>
					<span class="dbox__title">Total Order</span>
				</div>
				
				<div class="dbox__action">
        <a class="dbox__action__btn" href="{{route('order.list')}}">More Info</a>
				</div>				
			</div>
		</div>

    <div class="col-md-3">
			<div class="dbox dbox--color-2">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-gbp"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">{{$todaySele}}</span>
					<span class="dbox__title">Today Sale</span>
				</div>
				
				<div class="dbox__action">
        <a class="dbox__action__btn" href="{{route('order.list')}}">More Info</a>
				</div>				
			</div>
		</div>
    <div class="col-md-3">
			<div class="dbox dbox--color-3">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-download"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">{{$todayOrder}}</span>
					<span class="dbox__title">Today Order</span>
				</div>
				
				<div class="dbox__action">
        <a class="dbox__action__btn" href="{{route('order.list')}}">More Info</a>
				</div>				
			</div>
		</div>
    <div class="col-md-3">
			<div class="dbox dbox--color-1">
				<div class="dbox__icon">
					<i class="glyphicon glyphicon-import"></i>
				</div>
				<div class="dbox__body">
					<span class="dbox__count">{{$pendingOrder}}</span>
					<span class="dbox__title">Panding Order</span>
				</div>
				
				<div class="dbox__action">
        <a class="dbox__action__btn" href="{{route('order.list')}}">More Info</a>
				</div>				
			</div>
		</div>
   

	</div>
</div>


@endsection