<?php

use App\Http\Controllers\Data;
use App\Http\Controllers\Home;
use App\Http\Controllers\UserDb;
use App\Http\Controllers\UserViewDb;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/hi',[Home::class,'First']);
Route::get('/users',[Home::class,'users']);
Route::get('/data',[Data::class,'getData']);
Route::post('/postData',[Data::class,'postData']);
Route::get('/insertInfo',[UserDb::class,'insertInfo']);
Route::post('/insert',[UserDb::class,'insert']);
Route::get('/show',[UserDb::class,'show']);
Route::get('/delete{id}',[UserDb::class,'delete']);
