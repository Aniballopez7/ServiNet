<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RolsController;
use App\Http\Controllers\ShopController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\TestController;
use App\Http\Controllers\VerificationController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/


Auth::routes();

/* Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); */

/* Route::get('/', function () {
    return view('front.home.index');
}); */

Route::resource('/',ShopController::class);
Route::get('shop/customer/{id}/edit', '\App\Http\Controllers\ShopController@editCustomer')->name('shop.editCustomer');
Route::get('shop/supplier/{id}/edit', '\App\Http\Controllers\ShopController@editSupplier')->name('shop.editSupplier');

Route::get('shop/customer/{id}/show', '\App\Http\Controllers\ShopController@showCustomer')->name('shop.showCustomer');
Route::get('shop/supplier/{id}/show', '\App\Http\Controllers\ShopController@showSupplier')->name('shop.showSupplier');

Route::get('shop/customer/{id}/update', '\App\Http\Controllers\ShopController@updateCustomer')->name('shop.updateCustomer');
Route::get('shop/supplier/{id}/update', '\App\Http\Controllers\ShopController@updateSupplier')->name('shop.updateSupplier');


Route::resource('dashboard',DashboardController::class)->middleware('auth');
Route::resource('roles',RolsController::class)->middleware('auth');
Route::resource('test',TestController::class)->middleware('auth');
Route::resource('customer',CustomerController::class)->middleware('auth')->except(['customer.store']);
Route::resource('supplier',SupplierController::class)->middleware('auth');
Route::resource('verification',VerificationController::class)->middleware('auth');


Route::get('/registro', function () {
    return view('front.register.register');
});

Route::get('/registroProvedor', function (){
    return view('front.register.registerProviders');
});



Route::get('/editarUsuario', function (){
    return view('front.profileConfig.profileUser');
});

Route::get('/editarProvedor', function (){
    return view('front.profileConfig.profileProviders');
});
Route::get('/verUsuario', function (){
    return view('front.profileView.profileUser');
});

Route::get('/verProvedor', function (){
    return view('front.profileView.profileProviders');
});