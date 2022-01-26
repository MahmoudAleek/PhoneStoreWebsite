<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\SliderController;
use App\Http\Controllers\PhoneController;
use App\Http\Controllers\AdminController;

use App\Models\User;
use App\Models\Customers_Message;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


 Route::get('/',[HomeController::class,'index'])->name('home.admin');

 Route::get('/test',[HomeController::class , 'sendData' ]);



//// For Slider //// 
Route::get('/home/slider',[SliderController::class , 'index'])->name('home.slider');
Route::get('/add/slider',[SliderController::class , 'AddSlider'])->name('add.slider');
Route::post('/store/slider',[SliderController::class , 'StoreSlider'])->name('store.slider');



//// For Phones ////
Route::get('/home/phone',[PhoneController::class , 'index'])->name('home.phone');
Route::get('/add/phone',[PhoneController::class , 'AddNewPhone'])->name('add.phone');
Route::post('/store/phone',[PhoneController::class ,'CreateNewPhone'])->name('store.phone');



//////////// Admin Routes ////////////
Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [AdminController::Class , 'index'])->name('dashboard');

Route::prefix('/admin')->name('admin.')->group(function(){

    route::get('/phone',function(){
        return Route::currentroutename();
    })->name('add.phone');

    route::get('/phone/details',[AdminController::class , 'ShowPhoneDetails'])->name('phone.details');
    route::get('/logout',[AdminController::class , 'logout'])->name('logout');

    route::get('/profile',[AdminController::class , 'profile'])->name('profile');
    route::post('/update-profile',[AdminController::class , 'UpdateProfile'])->name('uprofile');

    route::get('/settings',[AdminController::class , 'AdminPassword'])->name('pass');
    route::post('/change-pass',[AdminController::class ,'AdminChangePassword'])->name('update.password');
 });


 /////////* Home Routes *////////

 //* Contact Page Routes *//
Route::get('/home/contact',[HomeController::class , 'Contact'])->name('home.contact');
Route::post('/home/contact/send-message',[HomeController::class , 'SendMessage'])->name('contact.send-message');