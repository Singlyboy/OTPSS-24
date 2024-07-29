<?php

namespace App\Http\Controllers;
use App\Models\Report;

use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function report(){
        $allReports = Report::paginate(5);
        return view('backend.report',compact('allReports'));
}
public function form()
{
    return view('backend.report-form');    
}

public function store(Request $request)
{

    //dd($request->all());
    Report::create([
        //bam pase table er column name => dan pase input field er name
        'name'=>$request->rep_name,
       'date'=>$request->rep_date
    ]);

    return redirect()->back();
}
}
