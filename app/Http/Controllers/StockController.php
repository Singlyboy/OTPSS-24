<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stock;

class StockController extends Controller
{
    public function stock(){
        $allStocks = Stock::paginate(5);
        return view('backend.stock', compact('allStocks'));
}
public function form()
{
    return view('backend.stock-form');    
}

public function store(Request $request)
{

   // dd($request->all());
    Stock::create([
    'name'=>$request->sto_name,
    'quantity'=>$request->sto_quantity,
    'update'=>$request->sto_update,
   ]);

    return redirect()->back();
}
}
