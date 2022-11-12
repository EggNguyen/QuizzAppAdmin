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
    return view('index');
});

Route::view('taikhoan_index','taikhoan_index');
Route::get('linhvuc', function () {
    return view('linhvuc');
})->name('linhvuc');

Route::get('cauhoi', function () {
    return view('cauhoi');
})->name('cauhoi');

Route::get('/taikhoan/create', [App\Http\Controllers\TaiKhoanController::class, 'create']);
Route::post('/taikhoan/create', [App\Http\Controllers\TaiKhoanController::class, 'store']);

Route::get('/taikhoan/update/{ID}', [App\Http\Controllers\TaiKhoanController::class, 'edit']);
Route::post('/taikhoan/update/{ID}', [App\Http\Controllers\TaiKhoanController::class, 'update']);

Route::get('/taikhoan/softdelete/{ID}', [App\Http\Controllers\TaiKhoanController::class, 'softdelete']);

Route::get('/taikhoan_index', [App\Http\Controllers\TaiKhoanController::class, 'show']);

