<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function customer(){
        $allCustomers = Customer::paginate(5);
        return view('backend.customer',compact('allCustomers'));
}
public function form()
{
    return view('backend.customer-form');    
}

public function store(Request $request)
{

   // dd($request->all());
   Customer::create([
        //bam pase table column name => dan pase input field er name
        'name'=>$request->cus_name,
       'email'=>$request->cus_email,
       'mobile'=>$request->cus_mobile,
   ]);

    return redirect()->back();
}
}
