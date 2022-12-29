<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Facades\Mail;
class TaiKhoanController extends Controller
{
    public function showForm(){
        return view('admin_login');
    }
    public function adminlogin(Request $request)
    {

        $cre = $request->validate([
            'TenTaiKhoan' => 'required',
            'MatKhau' => 'required',
        ]);
        $taikhoan = TaiKhoan::where('TenTaiKhoan',$request->TenTaiKhoan)->first();
        $vaitro = TaiKhoan::where('Vaitro',0);
        if ($taikhoan && $vaitro && Hash::check($request->MatKhau , $taikhoan->MatKhau)) {
            return redirect()->intended('/index');
        }
        else{
            return back()->with('message','khong the dang nhap');
        }
    }
    public function show()
    {
        $data = DB::table('taikhoan')->where('TrangThai', 1)->orderBy('VaiTro')->get();
        return view('taikhoan_index', ['data' => $data]);
    }
    public function create()
    {
        return view('taikhoan.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        TaiKhoan::create($data);
        return redirect('/taikhoan_index');
    }

    public function edit($ID)
    {
        $taikhoan = TaiKhoan::find($ID);
        return view('taikhoan.edit', compact('taikhoan'));
    }
    public function thungrac()
    {
        $data = DB::table('taikhoan')->where('TrangThai', 0)->orderBy('VaiTro')->get();
        return view('taikhoan.thungractaikhoan', ['data' => $data]);
    }
    public function khoiphuc(Request $request, $ID)
    {
        $taikhoan = TaiKhoan::find($ID);
        $taikhoan->TrangThai = 1;
        $taikhoan->update();

        return redirect('/taikhoan_index');
    }
    public function update(Request $request, $ID)
    {
        $taikhoan = TaiKhoan::find($ID);
        $taikhoan->TenTaiKhoan = $request->input('TenTaiKhoan');
        $taikhoan->Email = $request->input('Email');
        $taikhoan->Credit = $request->input('Credit');
        $taikhoan->Diem = $request->input('Diem');

        $taikhoan->update();
        return redirect('/taikhoan_index');
    }

    public function softdelete(Request $request, $ID)
    {
        $taikhoan = TaiKhoan::find($ID);
        $taikhoan->TrangThai = 0;

        $taikhoan->update();
        return redirect('/taikhoan_index');
    }
    
}
