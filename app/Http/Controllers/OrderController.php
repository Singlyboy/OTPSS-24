<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Order;
use App\Models\Part;

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

   public function addToCart($pId)
   {

    $parts=Part::find($pId);
    $myCart=session()->get('basket');

     //step 1: cart empty
     if(empty($myCart))
     {
         //action: add to cart
         $cart[$parts->id]=[
             //key=>value
             'parts_id'=>$parts->id,
             'parts_name'=>$parts->name,
             'price'=>$parts->price,
             'quantity'=>1,
             'subtotal'=>1 * $parts->price,
             'image'=>$parts->image
         ];

         session()->put('basket',$cart);

         notify()->success('parts added to cart.');
         return redirect()->back();
   }
   else{

      if(array_key_exists($pId,$myCart))
         {// dd($myCart[$pId]);
                //step 2: quantity update, subtotal update
               //q=1,sub=50
               $myCart[$pId]['quantity'] = $myCart[$pId]['quantity'] + 1;
               $myCart[$pId]['subtotal'] = $myCart[$pId]['quantity'] * $myCart[$pId]['price'];

               session()->put('basket',$myCart);

               notify()->success('Quantity updated.');
               return redirect()->back();
         }
         else{
        //step 3: add to cart
        $myCart[$parts->id]=[
            'parts_id'=>$parts->id,
            'parts_name'=>$parts->name,
            'price'=>$parts->price,
            'quantity'=>1,
            'subtotal'=>1 * $parts->price,
            'image'=>$parts->image
            
        ];

        
        session()->put('basket',$myCart);
        notify()->success("parts Added to Cart");
        return redirect()->back();
    }

    }
    }
    public function viewCart()
    {

    $myCart=session()->get('basket')?? [];
   //dd($myCart);
    return view('frontend.pages.cart',compact('myCart'));
    }


    public function clearCart()
    {
    session()->forget('basket');
     notify()->success('Cart clear.');
    return redirect()->back();

    }

    public function cartItemDelete($pId)
    {
        
        $cart=session()->get('basket');

       unset($cart[$pId]);


    
       session()->put('basket',$cart);

       notify()->success('Item remove.');

       return redirect()->back();



       

    }
}
