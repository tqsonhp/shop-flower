<?php

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

Route::get('/', function () {
    return view('welcome');
});


use App\Http\Controllers\LoginController;

use App\Http\Controllers\LogupController;
    
Route::get('/login', [LoginController::class, 'showlogin']);

Route::get('/logup', [LogupController::class, 'showlogup']);