<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class RegisterController extends Controller
{
    function registration()
    {
        return view('auth.register');
    }
    function storeRegistration(Request $request)
    {
        User::create([
            'name'=>$request->name,
            'email'=>$request->email,
            'password'=>$request->password,
            'address'=>$request->address,
            'phone'=>$request->phone,

        ]);

        return redirect()->route('login');
    }
    function login()
    {
        return view('auth.login');
    }

    function doLogin(Request $request)
    {
        $user=$request->except('_token');
        if(Auth::attempt($user))
            {
                return redirect()->route('frontend.home')->with('success','Logging Successfully..');
            }
        else
        return redirect()->route('login')->with('error','Invalid credintial..');
    }

    public function logout()
    { 
        session()->flush();
        Auth::logout();
        return redirect()->route('frontend.home');
    }
}
