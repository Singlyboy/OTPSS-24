<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Order;
use App\Models\Part;
use Carbon\Carbon;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function home(){
        $customerCount=Customer::count();

        $totalSale=Order::sum('total_amount');
        $partsCount=Part::count();
        $orderCount=Order::count();
        $todaySele=Order::whereDate('created_at', Carbon::today())
        ->where('status', 'completed') 
        ->sum('total_amount'); 
       
        $todayOrder=Order::whereDate('created_at', Carbon::today())->count();
        
        $pendingOrder=Order::whereDate('created_at', Carbon::today())
        ->where('status', 'pending')->count();
     
        return view('backend.home',compact('customerCount','totalSale','partsCount','orderCount','todaySele','todayOrder','pendingOrder'));
}

}