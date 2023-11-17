<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginform(){
        return view('Backend.Admin.login');
    }

    public function loginpost(Request $request)
    {
    $validate=Validator::make($request->all(),[
        'email'=>'required',
        'password'=>'required'
    ]);
    
    if ($validate->fails()){
        return redirect()->back()->withErrors($validate);
    }


    $credential=$request->only('email','password');
    $login=auth()->attempt($credential);
    if($login){
        return redirect()->route('home');
    }
    return redirect()->back();
    }

public function logout(){
    auth()->logout();
    return redirect()->route('admin_login');
}



}
