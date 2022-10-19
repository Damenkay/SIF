<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    public function index(){
        
        return view('Auth.register');
    }
    public function postRegister(Request $request){
        $form_data = $request -> validate([
            'name'=> 'required|max:20',
            'email'=> 'required|email:unique',
            'password'=>'required|min:4|confirmed'

        ]);
        // dd($form_data);

        User::create([
            'name'=> $request->name,
            'email'=>$request->email,
            'password'=>Hash::make($request->password)
        ]);
        return redirect()->route('login');
    }
    public function login(){


        
        return view('Auth.login');
    } 

    public function postLogin(Request $request){
        $form_data = $request->validate([
            'email'=>'required|email',
            'password' =>'required'
        ]);
        
        if (Auth::attempt($form_data)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }
        return back()->withErrors('Invalid Credentianls');
    }

}
