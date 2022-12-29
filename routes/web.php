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

Route::get('linhvuc_index', function () {
    return view('linhvuc_index');
})->name('linhvuc_index');

Route::get('cauhoi_index', function () {
    return view('cauhoi_index');
})->name('cauhoi_index');
Route::get('email',[TaiKhoanController::class,'forgotpassword']);

Route::post('/admin_login',[TaiKhoanController::class,'adminlogin'])->name('admin_login');
Route::get('/taikhoan/dangky',[App\Http\Controllers\DangkyController::class,'show'])->name('dangky');
Route::post('/taikhoan/dangky',[App\Http\Controllers\DangkyController::class,'create'])->name('dangky');
Route::get('/taikhoan/thungractaikhoan', [App\Http\Controllers\TaiKhoanController::class, 'thungrac'])->name('thungractaikhoan');
Route::post('/taikhoan/thungractaikhoan', [App\Http\Controllers\TaiKhoanController::class, 'thungrac'])->name('thungractaikhoan');
Route::get('/taikhoan/khoiphuc/{ID}', [App\Http\Controllers\TaiKhoanController::class, 'khoiphuc'])->name('khoiphuc');
Route::get('/taikhoan/update/{ID}', [App\Http\Controllers\TaiKhoanController::class, 'edit']);
Route::post('/taikhoan/update/{ID}', [App\Http\Controllers\TaiKhoanController::class, 'update']);
Route::get('/taikhoan/softdelete/{ID}', [App\Http\Controllers\TaiKhoanController::class, 'softdelete']);
Route::get('/taikhoan_index', [App\Http\Controllers\TaiKhoanController::class, 'show']);

Route::get('/linhvuc_index', [App\Http\Controllers\LinhVucController::class, 'show']);
Route::get('/linhvuc/themlinhvuc', [App\Http\Controllers\LinhVucController::class, 'create']);
Route::post('/linhvuc/themlinhvuc',[App\Http\Controllers\LinhVucController::class,'store'])->name('themlinhvuc');
Route::get('/linhvuc/update/{ID}', [App\Http\Controllers\LinhVucController::class, 'edit']);
Route::post('/linhvuc/update/{ID}', [App\Http\Controllers\LinhVucController::class, 'update']);
Route::get('/linhvuc/softdelete/{ID}', [App\Http\Controllers\LinhVucController::class, 'softdelete']);

Route::get('/cauhoi_index', [App\Http\Controllers\CauHoiController::class, 'show']);
Route::get('/cauhoi/themcauhoi', [App\Http\Controllers\CauHoiController::class, 'create']);
Route::post('/cauhoi/themcauhoi',[App\Http\Controllers\CauHoiController::class,'store'])->name('themcauhoi');
Route::get('/cauhoi/update/{ID}', [App\Http\Controllers\CauHoiController::class, 'edit']);
Route::post('/cauhoi/update/{ID}', [App\Http\Controllers\CauHoiController::class, 'update']);
Route::get('/cauhoi/softdelete/{ID}', [App\Http\Controllers\CauHoiController::class, 'softdelete']);

Route::get('/lichsu_index', [App\Http\Controllers\LichSuController::class, 'show']);
Route::get('/lichsu/update/{ID}', [App\Http\Controllers\LichSuController::class, 'edit']);
Route::post('/lichsu/update/{ID}', [App\Http\Controllers\LichSuController::class, 'update']);
Route::get('/lichsu/softdelete/{ID}', [App\Http\Controllers\LichSuController::class, 'softdelete']);