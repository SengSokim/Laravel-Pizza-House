<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PizzaController;
use App\Http\Controllers\CheckoutController;
use App\Mail\OrderMail;
use Illuminate\Support\Facades\Mail;
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
Route::get('/admindash', function () {
    return view('admindash');
});
Route::get('/home', function () {
    return view('home');
});

Route::view('/home', 'home')->middleware(['auth', 'verified']);
Route::view('/profile/edit', 'profile.edit')->middleware('auth');
Route::view('/profile/password', 'profile.password')->middleware('auth');
// Route:: get('/admin', function() {
//     return view('admin.index');
//  })->middleware(['auth','verified']);
//  Route:: get('/admin/users', function(){
//     return "All users";
//  })->middleware(['auth','verified']);;

Route::middleware(['auth', 'verified'])->prefix('admin')->group(function(){
    Route::get('/', function () {
        // Matches The "/admin/users" URL
         return view('home');
     });
    Route::get('/users', [UserController::class,'index']);
 });
Route::post('/pizzas', [PizzaController::class, 'store']);
Route::get('/pizzas', [PizzaController::class,'index']); 
Route::get('/pizzas/create', [PizzaController::class,'create']);
Route::get('/pizzas/{id}', [PizzaController::class,'show']);
Route::delete('/pizzas/{id}', [PizzaController::class,'delete']);

Route::get('/email', function(){

    Mail::to('email@gmail.com')->send(new OrderMail());
    return new OrderMail();
});
