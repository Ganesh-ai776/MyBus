<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{

    public function dashboard(){
        $c_data=Company::get();
        return view('dashboard',compact('c_data'));
    }

    public function registration(Request $request){
         
        $valid=$request->validate([
            // 'first'=>'required',
            'name'=>'required',
            'email'=>'required|email',
            'password'=>'required|confirmed|min:4|max:10',
            'image'=>'required|mimes:pdf,jpg,png,xlsx,docx|max:3000',
            'role'=>'required',
        ]);
        if ($valid) {
             $path=$request->file('image')->store('images','public');
            User::create([
            'name'=>$request->name,
            'email'=> $request->email,
            'password'=>$request->password,
            'image'=>$path,
            'role'=>$request->role,
            ]);
            return view('login');
            // return $request->role;

        }
        else {
            $error_reg="Registration Faild ";
            return view('book-massage',compact('error_reg'));
        }

    }

    public function loginPage(){
       return view('login');
    }


    public function user_admin(){
        $user_id=Auth::user()->id;
                $bus_company=Company::where('u_id',$user_id)->get();
                return view('bus',compact('bus_company'));

    }

    public function login(Request $request){
        $valid=$request->validate([
            'email'=>'required|email',
            'password'=>'required|min:4|max:10',
        ]);
        if (Auth::attempt($valid)) {
            if (Auth::user()->role == 'admin') {
                
            }
            elseif (Auth::user()->role == 'user-admin') {
                // return view('user-admin');

                return redirect()->route('user-admin');

            }
            else {
                return redirect()->route('dashboard');

            }
            
            
            
        }
        else{

            return redirect()->route('loginPage');
        }
    }
    public function logout(){
        if (Auth::check()){
            Auth::logout();
            return redirect()->route('dashboard');
        }
        else{
            return redirect()->route('loginPage');
        }
    }
}
