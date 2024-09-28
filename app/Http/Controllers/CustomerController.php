<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CustomerController extends Controller
{
    public function show($id){
        if (Auth::check() && Auth::user()->role=='user') {
           $bus_data=Bus::where('c_id',$id)->get();
           return view('bus',compact('bus_data'));
        }
        else{
            return redirect()->route('loginPage');
        }
    }
    public function show_admin($c_id){
        if (Auth::check() && Auth::user()->role=='user-admin') {
           $admin_bus_data=Bus::where('c_id',$c_id)->get();
           return view('bus',compact('admin_bus_data','c_id'));
        }
        else{
            return redirect()->route('loginPage');
        }
    }
    public function bus(){
        return view('bus');
    }

    public function bus_detail($id){
        if (Auth::check()) {
            $bus_data=Bus::find($id);
            // return $bus_data->id;
            return view('bus-detail',compact('bus_data'));
         }
         else{
             return redirect()->route('loginPage');
         }
    }



    public function b_data_store(Request $request){
        if (Auth::check()) {
            $u_id=Auth::user();

           $create= Customer::create([
                'seat_count'=>$request->seat_count,
                'price'=>$request->price,
                'b_name'=>$request->bus_name,
                'b_number'=>$request->bus_number,
                'customer_id'=>$u_id->id,
            ]);
            if ($create) {
                 $record = 'Booking Successfull !';
                 return view('book-massage',compact('record','create'));
            }
            else{
                return "Booking faild";
            }


        }
        else{
            return redirect()->route('loginPage');
        }

    }



    

    
}
