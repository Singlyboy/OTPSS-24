<!DOCTYPE html>
<html>
<head>
    <title>Order Confirmation</title>
</head>
<body>
<p>Order Number: {{$customerOrder->id}} </p>
 
<p>Status: {{$customerOrder->payment_status}}</p>
<p>Receiver Name: {{$customerOrder->receiver_name}}</p>
<p>Receiver Address: {{$customerOrder->receiver_address}}</p>
<p>Receiver Mobile: {{$customerOrder->receiver_mobile}}</p>

<p>We will notify you when your order is on its way.</p>
</body>
</html>
