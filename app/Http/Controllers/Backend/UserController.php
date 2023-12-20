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
            return redirect()->route('dashboard.home');
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


    //User Profile

    public function profile(){
    return view('Backend.Admin.Pages.Profile.profile');
    
    }






    // USER Entity

    public function list()
    {
        $User_data=User::Paginate(5);

        return view('Backend.Admin.Pages.User.list',compact('User_data'));
    }



    //View

public function view($id)
{

    $User_data = User::find($id);

    return view('Backend.Admin.Pages.User.view', compact('User_data'));
}


//Delete

public function delete($id)
{
    $User_data = User::find($id);
    if ( $User_data) {
        $User_data->delete();
    }

    notify()->success('User Deleted Successfully.');
    return redirect()->back();
}


//Edit


public function edit($id)
{

    $User_data = User::find($id);

    return view('Backend.Admin.Pages.User.edit', compact('User_data'));
}

//update

public function update(Request $request, $id)
{
    $User_data = User::find($id);

    if ($User_data) {

        $User_data->update([

            'name'=>$request->name,
            'email'=>$request->email,
            'role'=>$request->role,
            'password'=>$request->password,
        ]);

        notify()->success('User updated successfully.');
        return redirect()->back();
    }
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
