<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;

class OrderController extends Controller
{
    public function order(){
        $allOrders = Order::paginate(5);
        return view ('backend.order',compact('allOrders'));
}

public function form()
{
    return view('backend.order-form');    
}



public function store(Request $request)
{

   // dd($request->all());
   Order::create([
        //bam pase table er column name => dan pase input field er name
        'name'=>$request->ord_name,
       'amount'=>$request->ord_amount
    ]);

    return redirect()->back();
}

}
