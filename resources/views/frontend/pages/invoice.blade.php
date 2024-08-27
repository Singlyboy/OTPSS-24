@extends('frontend.master')

@section('content')


<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>DISEE - Invoice HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="https://storage.googleapis.com/theme-vessel-items/checking-sites-2/disee-html/HTML/main/assets/css/bootstrap.min.css">
    <link type="text/css" rel="stylesheet" href="https://storage.googleapis.com/theme-vessel-items/checking-sites-2/disee-html/HTML/main/assets/fonts/font-awesome/css/font-awesome.min.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900">

    <!-- Custom Stylesheet -->
    <link type="text/css" rel="stylesheet" href="https://storage.googleapis.com/theme-vessel-items/checking-sites-2/disee-html/HTML/main/assets/css/style.css">
</head>
<body>

<!-- Invoice 2 start -->
<div class="invoice-2 invoice-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="invoice-inner clearfix">
                    <div class="invoice-info clearfix" id="invoice_wrapper">
                      
                        <div class="invoice-top">
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-50">
                                        <h4 class="inv-title-1">Invoice To</h4>
                                        <h2 class="name">{{$order->receiver_name}}</h2>
                                        <p class="invo-addr-1">
                                        <div>Address:{{$order->receiver_address}}</div>
                                      <div>Email: {{ $order->receiver_email }}</div>
                                      <div>Phone: {{$order->receiver_mobile}}</div>
                                        </p>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="invoice-number mb-30">
                                        <div class="invoice-number-inner">
                                            <h4 class="inv-title-1">Invoice From</h4>
                                            <h2 class="name">Sarol Hossain</h2>
                                            <p class="invo-addr-1">
                                                Sarol Enterprise  <br/>
                                                Email:Sarolsagar417@gmail.com <br/>
                                                Pirojali, Gazipur, Bangladesh <br/>
                                                Mobile: 01682869369 <br/>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="invoice-center">
                            <div class="table-responsive">
                                <table class="table mb-0 table-striped invoice-table">
                                    <thead class="bg-active">
                                    <tr class="tr">
                                        <th>No.</th>
                                        <th class="pl0 text-start">Item Name</th>
                                        <th class="text-center">Price</th>
                                        <th class="text-center">Quantity</th>
                                        <th class="text-end">Amount</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($order->orderDetails as $item)
                        
                                    <tr class="tr">
                                        <td>
                                            <div class="item-desc-1">
                                                <span>{{$item->id}}</span>
                                            </div>
                                        </td>
                                        <td class="pl0">{{$item->parts->name}}</td>
                                        <td class="text-center">{{$item->parts_unit_price}}</td>
                                        <td class="text-center">{{$item->parts_quantity}}</td>
                                        <td class="text-end">{{$item->subtotal}}</td>
                                    </tr>
                                    @endforeach
                                    <tr class="tr2">
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                        <td class="text-center f-w-600 active-color">Grand Total</td>
                                        <td class="f-w-600 text-end active-color">{{$order->total_amount}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
      
                 
                    </div>
                    <div class="invoice-btn-section clearfix d-print-none">
                        <a  onClick="printReport()" class="btn btn-lg btn-print">
                            <i class="fa fa-print"></i> Print Invoice
                        </a>
                        
                        <a id="invoice_download_btn" class="btn btn-lg btn-download btn-theme">
                            <i class="fa fa-download"></i> Download Invoice
                        </a>
                       
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice 2 end -->


<script type="text/javascript">
    function printReport()
    {
        var printContents = document.getElementById("invoice_wrapper").innerHTML;
			var originalContents = document.body.innerHTML;

			document.body.innerHTML = printContents;

			window.print();

			document.body.innerHTML = originalContents;
    }
</script>
</body>
</html>


@endsection