<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BusController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\CustomerController;

// Route::get('/', function () {
//     return view('dashboard');
// });
Route::get('/',[UserController::class,'dashboard'])->name('dashboard');
Route::post('/login',[UserController::class,'login'])->name('login');
Route::get('/loginPage',[UserController::class,'loginPage'])->name('loginPage');
Route::get('/logout',[UserController::class,'logout'])->name('logout');
Route::post('/registration',[UserController::class,'registration'])->name('registration');
Route::get('/user-admin',[UserController::class,'user_admin'])->name('user-admin');





Route::get('/Buses/{id}',[CustomerController::class,'show'])->name('Buses');
Route::get('/Admin-Buses/{id}',[CustomerController::class,'show_admin'])->name('Admin-Busses');
Route::get('/Bus',[CustomerController::class,'bus'])->name('bus');
Route::get('/details/{id}',[CustomerController::class,'bus_detail'])->name('bus_detail');
Route::post('/b_data',[CustomerController::class,'b_data_store'])->name('b_data_store');





Route::get('/Add-Bus-Page/{id}',[BusController::class,'Add_Bus_Page'])->name('Add-Bus-Page');
Route::post('/Add-Bus',[BusController::class,'Add_Bus'])->name('Add-Bus');
Route::get('/Booking-details',[BusController::class,'booking_details'])->name('Booking-details');
Route::get('/Booking-cancle/{id}',[BusController::class,'booking_cancle'])->name('booking-cancle');
Route::get('/Edit-Bus-Details/{id}',[BusController::class,'Edit_Bus_Details'])->name('Edit-Bus-Details');
Route::post('/Update-Bus-Details',[BusController::class,'Update_Bus_Details'])->name('Update-Bus-Details');
Route::post('/Find-Bus',[BusController::class,'Find_Bus'])->name('Find-Bus');





Route::get('/Business',[CompanyController::class,'Business'])->name('business');
Route::get('/New-Registration/{role}',[CompanyController::class,'bus_registration'])->name('Bus-Registration');
Route::get('/Add-company-page',[CompanyController::class,'Add_company_page'])->name('Add-company-page');
Route::post('/Add-company',[CompanyController::class,'Add_company'])->name('Add-company');





