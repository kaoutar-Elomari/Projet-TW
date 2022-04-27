<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Http;

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
Route::get('/laravel', function (){
	return view("laravel2");
});
Route::get('/larave', function (){
	return view("laravel");
});
Route::get('/',[CommentController:: class,'show']);
Route::get('/Comment',[CommentController:: class,'index']);
Route::get('/Commente',[CommentController:: class,'affiche']);
Route::post('/',[CommentController:: class,'store']);