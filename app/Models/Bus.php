<?php

namespace App\Models;

use App\Models\Customer;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Bus extends Model
{
    use HasFactory;
    protected $guarded=[];


    // public function booked_details(){
    //   return $this->hasMany(Customer::class,'bus_id','id');
    // }
}
