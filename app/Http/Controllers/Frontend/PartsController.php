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
}
