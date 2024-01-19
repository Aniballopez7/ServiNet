<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RolsController;
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

Route::get('/', function () {
    return view('front.home.index');
});
// ->middleware('auth'); //logueado para entrar en modo de ejemplo (no aplicable)

/* Route::get('/dashboard', function () {
    return view('dashboard.index');
}); */
/* Route::get('/roles', function () {
    return view('dashboard.roles.index');
}); */
/* Route::get('/verifications', function () {
    return view('dashboard.verifications.index');
}); */
Route::resource('dashboard',DashboardController::class)->middleware('auth');
Route::resource('roles',RolsController::class)->middleware('auth');
Route::resource('test',TestController::class)->middleware('auth');
Route::resource('customer',CustomerController::class)->middleware('auth');
Route::resource('supplier',SupplierController::class)->middleware('auth');
Route::resource('verification',VerificationController::class)->middleware('auth');

/* Route::resource('verification',VerificationController::class); */

/* Route::get('/tests', function () {
    return view('dashboard.tests.index');
}); */
/* Route::get('/suppliers', function () {
    return view('dashboard.suppliers.index');
}); */

Route::get('/registro', function () {
    return view('front.register.register');
});

Route::get('/entrar', function () {
    return view('front.login.login');
});

Route::get('/registroProvedor', function (){
    return view('front.registerProviders');
});

Route::get('/editarUsuario', function (){
    return view('front.profileConfig.profileUser');
});

Route::get('/editarProvedor', function (){
    return view('front.profileConfig.Providers');
});
Route::get('/verUsuario', function (){
    return view('front.profileView.profileUser');
});

Route::get('/verProvedor', function (){
    return view('front.profileView.Providers');
});