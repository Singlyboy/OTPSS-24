<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Machine;

class MachineController extends Controller
{
        public function machine(){

            $allMechines = Machine::paginate(5);

        return view('backend.machine',compact('allMechines'));
    }

            
            public function form(Request $request)
        {
            //  $allCategory=Category::$request->all();
            return view('backend.machine-form');    
        }

        public function store(Request $request)
        {

        //dd($request->all());
            Machine::create([

                'tittle'=>$request->mac_name,
                'description'=>$request->mac_description
        ]);

            return redirect()->route('machine.list');
        }
}
