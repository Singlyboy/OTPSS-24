<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Payment;

class PaymentController extends Controller
{
    public function payment(){
        $allPayments = Payment::paginate(5);
        return view('backend.payment',compact('allPayments'));
}
public function form()
{
    return view('backend.payment-form');    
}

public function store(Request $request)
{

    //dd($request->all());
    Payment::create([
        //bam pase table er column name => dan pase input field er name
        'name'=>$request->pay_name,
        'amount'=>$request->pay_amount,
        'date'=>$request->pay_date
      
    ]);

    return redirect()->back();
}
}
