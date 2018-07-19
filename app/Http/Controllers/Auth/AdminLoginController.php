<?php

namespace App\Http\Controllers\Auth;

use Auth;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class AdminLoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest:admin', ['except'=> ['logout']]);
    }

    public function showLogin(){
        return view('auth.admin-login');
    }

    public function login(Request $request){

        // validate login data
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required|min:6',
        ]);

        // attempt login

        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password], $request->remember)) {

        // if successiful redirect the user to the intented location
            return redirect()->intended(route('admin.dashboard'));

        }

        // else redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email', 'remember'));

    }

    public function logout(){
        Auth::guard('admin')->logout();
        return redirect('/');
    }

}
