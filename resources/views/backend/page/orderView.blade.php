
<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>DISEE - Invoice HTML5 Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=2.0">
    <meta charset="UTF-8">

    <!-- External CSS libraries -->
    <link type="text/css" rel="stylesheet" href="https://storage.googleapis.com/theme-vessel-items/checking-sites-2/disee-html/HTML/main/assets/css/bootstrap.min.css">
   
  
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
                                        <h2 class="name">{{$orders->receiver_name}}</h2>
                                        <p class="invo-addr-1">
                                        <div>{{$orders->receiver_address}}</div>
                                      <div>Email: {{ $orders->receiver_email }}</div>
                                      <div>Phone: {{$orders->receiver_mobile}}</div>
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
                                    @foreach ($orders->orderDetails as $item)
                        
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
                                        <td class="f-w-600 text-end active-color">{{$orders->total_amount}}</td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                 <form action="{{route('order.status',$item->order_id)}}" method="post">
                 @csrf
               
                <select name="order_status" class="form-select" aria-label="Default select example">
                <option value="Pending">Pending</option>
                <option value="Confirm">Confirm</option>
                <option value="Cancel">Cancel</option>
                <option value="Completed">Completed</option>
                
                
             
                </select>
                <button type="submit" class="btn btn-primary">Submit</button>
               
                                   
                </ul>
                </div>
      
                 
                    </div>
             
                </div>
                    </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>

</script>
</body>
</html>

