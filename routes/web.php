<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\LoginController;

use App\Http\Controllers\LogupController;  // import controller logup

use App\Http\Controllers\DashboardController;

use App\Http\Controllers\ProductController;

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
    return view('auth/home');
});



Route::get('/login', [LoginController::class, 'showlogin'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

// hiển thị form đăng kí (GET)
Route::get('/logup', [LogupController::class, 'showlogup'])->name('logup.form');
// xử lí dữ liệu đăng kí (POST)
Route::post('/logup', [LogupController::class, 'logup'])->name('logup.submit');


Route::get('/dashboard', [DashboardController::class, 'showdashboard']);


Route::get('/product', [ProductController::class, 'showproduct']);


// use Illuminate\Support\Facades\DB;

// Route::get('/check-db', function () {
//     try {
//         DB::connection()->getPdo();
//         return '✅ Kết nối thành công!';
//     } catch (\Exception $e) {
//         return '❌ Kết nối thất bại: ' . $e->getMessage();
//     }
// });

