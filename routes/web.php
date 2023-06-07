<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userconteoller;
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


Route::get('/','App\Http\Controllers\userconteoller@mh');
Route::get('/dashboard/{id}','App\Http\Controllers\userconteoller@dash');
Route::post('/register',[userconteoller::class,'register'])->name('register');
Route::post('/login',[userconteoller::class,'login'])->name('login');
Route::get('/dashboard/{id}/epense','App\Http\Controllers\userconteoller@expense');
Route::post('/add',[userconteoller::class,'add'])->name('add');
Route::post('/addpost',[userconteoller::class,'addpost'])->name('addpost');
Route::get('/login','App\Http\Controllers\userconteoller@log');
Route::get('/fav/{id}/{idd}','App\Http\Controllers\userconteoller@fav');
Route::get('/del/{id}/{idd}','App\Http\Controllers\userconteoller@del');
Route::get('mhamad','App\Http\Controllers\userconteoller@mha');
Route::post('/addcoment',[userconteoller::class,'addcoment'])->name('addcoment');