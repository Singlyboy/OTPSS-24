<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Part;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PartsController extends Controller
{
    public function parts(){
        $allParts = Part::with('category')->paginate(5);
        return view('backend.parts', compact('allParts'));
}
public function form()
{
    $allCategory=Category::all();
    //dd($allCategory);
    return view('backend.parts-form',compact('allCategory'));    
    
}

public function store(Request $request)
{
    $validation=Validator::make($request->all(),
    [
        'par_name'=>'required|min:2',
        'par_image'=>'required',
         'category_id'=>'required'
    ]);

    if($validation->fails())
    {
      notify()->error($validation->getMessageBag());
      return redirect()->back();
    }
    if($request->hasfile('par_image')){

        $file=$request->file('par_image');
        $image=date('ymdhis').'.'.$file->getClientOriginalExtension();
        $file->storeAs('upload',$image);
    }
//    dd($request->all());

   Part::create([
     
        'name'=>$request->par_name,
        'description'=>$request->par_description,
        'price'=>$request->par_price,
        'image'=>$image,
        'category_id'=>$request->category_id
    ]);

    return redirect()->route('parts.list');
}
}
