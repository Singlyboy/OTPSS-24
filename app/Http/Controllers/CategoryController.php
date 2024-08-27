<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CategoryController extends Controller
{
    public function category()
    {
        
        $allCategory=Category::paginate(5);
       
       return view('backend.category',compact('allCategory'));   
    }

    public function form()
    {
        return view('backend.category-form');    
    }

    public function store(Request $request)
    {

        $validation=Validator::make($request->all(),
        [
            'cat_name'=>'required|min:2',
        ]);
        
      if($validation->fails())
      {
        notify()->error($validation->getMessageBag());
        return redirect()->back();
      }


        Category::create([
           
            'name'=>$request->cat_name,
            'description'=>$request->cat_description
        ]);

        return redirect()->back();

    }
}
