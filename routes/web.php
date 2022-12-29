<?php

use App\Http\Controllers\Auth\DangkyController;
use App\Http\Controllers\TaiKhoanController;
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

 Route::get('/index', function () {
    return view('index');
});
Route::view('/', 'admin_login');

Route::get('/admin_login', function () {
    return view('admin_login');
});
Route::view('taikhoan_index','taikhoan_index');
Route::get('linhvuc', function () {
    return view('linhvuc');
})->name('linhvuc');

Route::get('cauhoi', function () {
    return view('cauhoi');
})->name('cauhoi');
Route::get('email',[TaiKhoanController::class,'forgotpassword']);

Route::post('/admin_login',[TaiKhoanController::class,'adminlogin'])->name('admin_login');
Route::get('/taikhoan/dangky',[App\Http\Controllers\DangkyController::class,'show'])->name('dangky');

Route::post('/taikhoan/dangky',[App\Http\Controllers\DangkyController::class,'create'])->name('dangky');


Route::get('/taikhoan/update/{ID}', [App\Http\Controllers\TaiKhoanController::class, 'edit']);
Route::post('/taikhoan/update/{ID}', [App\Http\Controllers\TaiKhoanController::class, 'update']);

Route::get('/taikhoan/softdelete/{ID}', [App\Http\Controllers\TaiKhoanController::class, 'softdelete']);

Route::get('/taikhoan_index', [App\Http\Controllers\TaiKhoanController::class, 'show']);

