<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Http\Controllers\Controller;
use App\Models\Taikhoan;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class DangkyController extends Controller
{   
    public function show(){
        return view('taikhoan.dangky');
    }
    public function create(Request $request)
    {
        Taikhoan::create([
            'TenTaiKhoan' => $request['TenTaiKhoan'],
            'MatKhau' => Hash::make($request['MatKhau']),
            'VaiTro' => $request['VaiTro'],
            'TrangThai'=>1,
            'Diem' => 0,
            'Credit' => 0
        ]);
        return redirect()->to('/taikhoan_index');

    }
    
}