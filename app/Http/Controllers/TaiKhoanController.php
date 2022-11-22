<?php

namespace App\Http\Controllers;

use App\Models\Nguoichoi;
use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class TaiKhoanController extends Controller
{   
    //Muốn đăng nhập phải sử dụng tài khoản với mật khẩu đã hash
    //vào trong db xem nếu trường mật khẩu là ký tự lạ thì có thể đăng nhập được ( nếu nhớ mật khẩu )
    public function login(Request $request){
        $taikhoan = TaiKhoan::where('TenTaiKhoan' , $request->TenTaiKhoan)->first();
        if (!$taikhoan || !Hash::check($request->MatKhau , $taikhoan->MatKhau,[])) {
            return response()->json([
                'success' => false,
                'message' => 'sai tai khoan hoac mat khau',
            ],404);
        }
        // $token = $taikhoan->createToken('authToken')->plainTextToken;
        // return response()->json([
        //     'access_token' => $token,
        //     'type_token' => ' Bearer',
        // ],200);
        return response()->json([
            'success' => true,
        ], 200);
    }
    public function register(Request $request){
       $message = [
        'TenTaiKhoan.required' => 'Thieu ten tai khoan',
        'MatKhau.required' => 'Thieu Mat Khau',
       ];

       $validate = Validator::make($request->all(),[
        'TenTaiKhoan' => 'required',
        'MatKhau' => 'required',

       ],$message);

       if ($validate ->fails()) {
        return response()->json([
            'message' => $validate->errors()
        ],404);

       }
       TaiKhoan::create([
        'TenTaiKhoan' => $request->TenTaiKhoan,
        'MatKhau' => Hash::make($request->MatKhau),]);
        Nguoichoi::create([
            'Ten' => $request->Ten,]);
        
            return response()->json([
                'success' => true,
            ], 200);
    }
    public function show(){
    $data = DB::table('taikhoan')->where('TrangThai',1)->get();
    return view('taikhoan_index', ['data' => $data]);
    }
    public function create(){
        return view('taikhoan.create');
    }

    public function store(Request $request){
        $data = $request->all();
        TaiKhoan::create($data);
        return redirect('/taikhoan_index');
    }
    
    public function edit($ID){
        $taikhoan = TaiKhoan::find($ID);
        return view('taikhoan.edit', compact('taikhoan'));
    }

    public function update(Request $request, $ID){
        $taikhoan = TaiKhoan::find($ID);
        $taikhoan->Sdt = $request->input('Sdt');
        $taikhoan->update();
        return redirect('/taikhoan_index');
    }

    public function softdelete(Request $request, $ID){
        $taikhoan = TaiKhoan::find($ID);
        $taikhoan->TrangThai = 0;

        $taikhoan->update();
        return redirect('/taikhoan_index');
    }
}