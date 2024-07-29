<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;

use Illuminate\Http\Request;

class AuthenticationController extends Controller
{
    public function login(){
        return view('backend.login');
}

public function dologin(Request $request)
{

   
    $credentials=$request->except("_token");

    $check=Auth::attempt($credentials);
    
    if($check)
    {
        notify()->success('Laravel Notify is awesome!');
        return redirect()->route('dashboard');

    }else{
        
        return redirect()->back();
    }




}
public function logout()
{
    
      Auth::logout();

      notify()->success('logout!');
    

      return redirect()->route('login');
}

}
