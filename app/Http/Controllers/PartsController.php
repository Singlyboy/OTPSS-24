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
        'par_name'=>'required|unique:parts,name',
        'par_image'=>'required',
        'category_id'=>'required',
        'par_stock'=>'required'
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
        'stock'=>$request->par_stock,
        'image'=>$image,
        'category_id'=>$request->category_id
    ]);

    return redirect()->route('parts.list');
}
public function delete($id)
{

    // Parts::find($id)->delete();
    $parts=Part::find($id);//data entry
    $parts->delete();//delete done

    notify()->success('Parts Deleted successfully.');

    return redirect()->back();

    
}
public function viewParts($id)
    {
        $parts=Part::find($id);

        return view('backend.page.parts-view',compact('parts'));
    }
    public function edit($id)
    {

        $parts=Part::find($id);
        $allCategory=Category::all();
        return view('backend.page.parts-edit',compact('allCategory','parts'));
    }
    public function update(Request $request,$id)
    {
        // dd($request->all());

        //validation
        $validation=Validator::make($request->all(),
        [
            'par_name'=>'required|min:2',
            'par_image'=>'required',
            'category_id'=>'required'
        ]);


        //query
        $parts=Part::find($id);
        $parts->update([
            'name'=>$request->par_name,
            'price'=>$request->par_price,
        ]);
      
        notify()->success('Parts updated successfully.');
        return redirect()->route('parts.list');


    }

}
