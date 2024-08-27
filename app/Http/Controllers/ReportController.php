<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Models\Report;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(){

        if(request()->has('from_date') && request()->has('to_date'))
{
    $allOrders= Order::with('customer')
    ->whereBetween('created_at',[request()->from_date,request()->to_date])
    ->get();
    return view('backend.report',compact('allOrders'));
}




        $allOrders = Order::paginate(10);
     
    return view('backend.report',compact('allOrders'));
}

}