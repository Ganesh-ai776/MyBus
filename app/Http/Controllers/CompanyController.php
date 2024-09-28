<?php

namespace App\Http\Controllers;

use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CompanyController extends Controller
{
    public function Business(){
        // return view('bus-registration');
        return view('business');
    }

    public function bus_registration($role){
        return view('bus-registration',compact('role'));

    }

    public function Add_company_page(){
        return view('add-company');
    }


    public function Add_company(Request $request){
          $valid=$request->validate([
            'c_name'=>'required',
            'c_address'=>'required',
            'u_id'=>'required',
          ]);

          if (Company::create($valid)) {
            // echo "success";
            return redirect()->route('user-admin');
          }
          else{
            echo "falid";
          }
    }
}
