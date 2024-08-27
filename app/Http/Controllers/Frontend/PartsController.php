<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\Part;

class PartsController extends Controller
{
    public function allParts()
    {
    
      $parts=Part::all();
       return view('frontend.parts',compact('parts'));
    }
    
    public function  showParts($id)
    {
      
    $singleParts=Part::find($id);

     
      $relatedParts=Part::where('category_id',$singleParts->category_id)
                      ->where('id','!=',$singleParts->id)
                      ->limit(4)
                      ->get();

      //method chaining
      return view('frontend.pages.single_parts',compact('singleParts','relatedParts'));
    }

    public function search ()
    {
      $parts=Part::where('name','LIKE','%'.request()->search_key.'%')
      ->get();
      return view('frontend.pages.search',compact('parts'));
    }
}
