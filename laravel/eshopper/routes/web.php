<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\admin_controller;
use App\Http\Controllers\contact_controller;
use App\Http\Controllers\categorie_controller;
use App\Http\Controllers\customer_controller;
use App\Http\Controllers\booking_controller;
use App\Http\Controllers\cloth_controller;
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

Route::get('/', function () {
    return view('welcome');
});

/*------------Frontend---------------------*/

Route::view('/index','Frontend.index');
Route::view('/error','Frontend.404');
Route::view('/blog','Frontend.blog');
Route::view('/blogsingle','Frontend.blogsingle');
Route::view('/cart','Frontend.cart');
Route::view('/checkout','Frontend.checkout');
Route::view('/contact','Frontend.contact');

Route::view('/login','Frontend.login');
Route::view('/register','Frontend.register');
Route::view('/productdetail','Frontend.productdetail');
Route::view('/shop','Frontend.shop');

//////////////contact////////////////////////

Route::get('/contact',[contact_controller::class,'create']);
Route::post('/contact',[contact_controller::class,'store']);

/*----------------Backend------------------*/

Route::view('/login','Backend.Admin.login');
Route::view('/dashboard','Backend.Admin.dashboard');
Route::view('/register','Backend.Admin.register');
Route::view('/admin','Backend.Admin.dashboard');
Route::view('/addcloth','Backend.Admin.addcloth');
Route::view('/editprofile','Backend.Admin.editprofile');
Route::view('/managecloth','Backend.Admin.managecloth');
Route::view('/managecustomer','Backend.Admin.managecustomer');
Route::view('/profile','Backend.Admin.profile');
Route::view('/addcategory','Backend.Admin.addcategory');
Route::view('/managecontact','Backend.Admin.managecontact');
Route::view('/managecategory','Backend.Admin.managecategory');
Route::view('/managebooking','Backend.Admin.managebooking');

//////////////////category///////////////////////

Route::get('/addcategory',[categorie_controller::class,'create']);
Route::post('/addcategory',[categorie_controller::class,'store']);