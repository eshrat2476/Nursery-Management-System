<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class CustomerController extends Controller
{
    public function registration()
    {
        return view('Frontend.Pages.registration');
    }

    public function store(Request $request)
    {
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => 'customer',
            'password' => bcrypt($request->password),
        ]);

        notify()->success('Customer Registration successful.');

        return redirect()->back();
    }






    public function login()
    {
        return view('Frontend.Pages.login');
    }

    public function doLogin(Request $request)
    {

        $validate = Validator::make($request->all(), [
            'email' => 'required',
            'password' => 'required',
        ]);

        if ($validate->fails()) {
            return redirect()->back();
        }

        $credential = $request->only('email', 'password');
        $login = auth()->attempt($credential);

        if ($login) {

            notify()->success('Login Success.');
            return redirect()->route('Home');
        }

        notify()->error('Invalid Credentials.');
        return redirect()->back();
    }





    public function logout()
    {
        auth()->logout();
        
        notify()->success('Logout Success.');    
        return redirect()->route('Home');
    }
}