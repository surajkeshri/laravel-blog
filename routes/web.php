<?php

use App\Http\Controllers\CreateBlogController;
use App\Http\Controllers\LoginController;
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

Route::get('/user/CreateBlog',[CreateBlogController::class,'index']);

Route::get('/',[LoginController::class,'index']);
Route::get('/singUp',[LoginController::class,'singUp']);
Route::post('/singUp',[LoginController::class,'register']);
Route::post('/login',[LoginController::class,'login']);
Route::get('/dashboard',[CreateBlogController::class,'dashboard'])->middleware('check-login');
Route::get('/logout',[LoginController::class,'logout']);