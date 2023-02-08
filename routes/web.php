<?php

use App\Http\Controllers\ItemController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PurchaseController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;

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
    return view('page');
});

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);
Route::post('/logout', [LoginController::class, 'logout'])->middleware('auth');

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/home',[ItemController::class,'idx']);
Route::get('/detail/{id}',[ItemController::class,'detail']);

Route::get('/order/{id}',[OrderController::class, 'idx'])->name('order_get');
Route::POST('/order/{user_id}/{item_id}',[OrderController::class, 'store']);
Route::delete('/order/delete/{user_id}/{item_id}',[OrderController::class, 'deleteLogic']);

Route::get('/purchase/{user_id}',[PurchaseController::class]);
Route::POST('/purchase/{user_id}',[PurchaseController::class, 'store']);
Route::get('/success', function () {
    return view('success');
});

Route::get('/profile',[ProfileController::class, 'idx']);
Route::POST('/profile',[ProfileController::class, 'update']);

Route::middleware(['auth', 'admin'])->group(function () {
    Route::get('/manage',[UserController::class,'idx']);
    Route::get('/update/{id}',[UserController::class,'update']);
    Route::post('/updateuser/{id}',[UserController::class,'updateLogic']);
    Route::get('/delete/{id}',[UserController::class,'delete']);
});
