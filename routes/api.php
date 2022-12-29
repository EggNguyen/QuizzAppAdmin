<?php

use App\Http\Controllers\TaiKhoanController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::post('/register', [TaiKhoanController::class, 'register']);
Route::post('/login', [TaiKhoanController::class, 'login']);
Route::post('/updatepoint', [TaiKhoanController::class, 'updatepoint']);

// Route::middleware('auth:sanctum')->group(function (Request $request) {
//     Route::get('/taikhoan',function(Request $request){
//         return $request->taikhoan();
//     });
// });
Route::group(['middleware' => ['auth:sanctum']],function(){
    Route::get('/taikhoan',[TaiKhoanController::class,'taikhoan']);
    Route::post('/logout',[TaiKhoanController::class,'logout']);

});


