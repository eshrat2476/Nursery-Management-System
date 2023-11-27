<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class UserController extends Controller
{
    public function loginform()
    {
        return view('Backend.Admin.login');
    }

    public function loginpost(Request $request)
    {
        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required'
        ]);

        if ($validate->fails()) {
            return redirect()->back()->withErrors($validate);
        }


        $credential = $request->only('email', 'password');
        $login = auth()->attempt($credential);
        if ($login) {

            notify()->success('Login Success.');
            return redirect()->route('home');
        }

        notify()->error('Invalid Credentials.');
        return redirect()->back();
    }

    public function logout()
    {
        auth()->logout();
        notify()->success('Logout Successfully.');
        return redirect()->route('admin_login');
    }


    // USER Entity

    public function list()
    {
        $User_data=User::Paginate(10);

        return view('Backend.Admin.Pages.User.list',compact('User_data'));
    }


    public function create()
    {

        return view('Backend.Admin.Pages.User.create');
    }

    public function store(Request $request)
    {

        $validate=Validator::make($request->all(),[
            'name'=>'required',
            'email'=>'required',
            'role'=>'required',
            'password'=>'required',

         ]);
    
         if($validate->fails()){
            return redirect()->back()->withErrors($validate);
         }
    
         User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>$request->password,
        ]);
    return redirect(route('admin_users'));


    }



}
