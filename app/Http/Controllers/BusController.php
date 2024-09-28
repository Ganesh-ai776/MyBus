<?php

namespace App\Http\Controllers;

use App\Models\Bus;
use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BusController extends Controller
{
    public function booking_details(){
        if (Auth::check()) {
         
        
         $u_id= Auth::user()->id;
 
 
         $book_details=Customer::where('customer_id',$u_id)->get();
        
        return view('booking-details',compact('book_details')); 
        }
        else{
         return redirect()->route('loginPage');
        }
     }


     public function booking_cancle($id){
           if (Auth::check()) {
              $cancle=Customer::find($id);
              $cancle->delete();
              return redirect()->route('Booking-details');
           }
           else{
            return redirect()->route('loginPage');
           }
     }


     public function Add_Bus_page($id){
        return view('add-bus',compact('id'));
     }

     public function Add_Bus(Request $request){
             $valid=$request->validate([
                'b_name'=>'required',
                'b_number'=>'required',
                'from'=>'required',
                'to'=>'required',
                'price'=>'required',
                'b_type'=>'required',
                'c_id'=>'required',
                'u_id'=>'required',
            ]);
            if (Auth::check() && Auth::user()->role=="user-admin") {
               // $u_id=Auth::user()->id;
               Bus::create($valid);
               return redirect()->route('Admin-Busses',$request->c_id);
            }
     }


     public function Edit_Bus_Details($id){
      if (Auth::check() && Auth::user()->role=="user-admin") {

         $bus_data=Bus::find($id);
         return view('edit-bus',compact('bus_data'));
      }
     }



     public function Update_Bus_Details(Request $request){
      $valid=$request->validate([
         'b_name'=>'required',
         'b_number'=>'required',
         'from'=>'required',
         'to'=>'required',
         'price'=>'required',
         'b_type'=>'required',
         // 'c_id'=>'required',
     ]);
     if (Auth::check() && Auth::user()->role=="user-admin") {
        Bus::where('id',$request->b_id)->update($valid);
        return redirect()->route('Admin-Busses',$request->c_id);
     }
     }


     public function Find_bus(Request $request){
         $valid=$request->validate([
            'from'=>"required",
            'to'=>'required',
         ]);

         if (Auth::check() && Auth::user()->role=="user") {
            $bus_data=Bus::where([
              'from'=>$request->from,
              'to'=>$request->to,
            ])->get();
            if (isset($bus_data) ) {
               
               return view('bus',compact('bus_data'));
            }
            else{
               $not_found="Not Found ?";
               return view('bus',compact('not_found'));
                
            }

            
         }
         else{
            return redirect()->route('loginPage');

         }
     }
}
