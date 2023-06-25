<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get("/",[HomeController::class,'index'])->name('home-sweethome');


Route::get('/divace1',[HomeController::class,'divacefirst'])->name('divace-1');
Route::get('/divace2',[HomeController::class,'divacesecond'])->name('divace-2');
Route::get('/divace3',[HomeController::class,'divacethird'])->name('divace-3');

Route::get('/history',[HomeController::class,'history'])->name('history');
