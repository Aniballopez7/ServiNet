<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\homeController;
use App\Http\Controllers\cursoController;
use App\Http\Controllers\RolsController;
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

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/home', function () {
    return view('homepage');
})->middleware('auth'); //logueado para entrar en modo de ejemplo (no aplicable)

Route::get('/dashboard', function () {
    return view('dashboard.index');
});
/* Route::get('/roles', function () {
    return view('dashboard.roles.index');
}); */
/* Route::get('/verifications', function () {
    return view('dashboard.verifications.index');
}); */
Route::resource('roles',RolsController::class);
Route::resource('test',TestController::class);
Route::resource('verification',VerificationController::class);

/* Route::get('/tests', function () {
    return view('dashboard.tests.index');
}); */
Route::get('/suppliers', function () {
    return view('dashboard.suppliers.index');
});