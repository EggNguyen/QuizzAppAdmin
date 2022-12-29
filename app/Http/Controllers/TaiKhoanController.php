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
    // public function login(Request $request)
    // {
    //     $request->validate([
    //         'TenTaiKhoan' => 'required',
    //         'MatKhau' => 'required',
    //     ]);
    //     $taikhoan = TaiKhoan::where('TenTaiKhoan',$request->TenTaiKhoan)->first();
    //     if (!$taikhoan || !Hash::check($request->MatKhau , $taikhoan->MatKhau)) {
    //        throw ValidationException::withMessages(['message'=>['dsada']]);
    //     }
    //     // return["token" =>$taikhoan->createToken('secret')->plainTextToken];
    //     return response([
    //         'taikhoan' => $taikhoan,
    //         'token' => $taikhoan->createToken('secret')->plainTextToken
    //     ]);
    // }
    // public function register(Request $request)
    // {
    //     $attrs = $request->validate([
    //         'TenTaiKhoan' => 'required',
    //         'MatKhau' => 'required',
    //         'Email' => 'required'
    //     ]);
    //     $taikhoan = TaiKhoan::create([
    //         'TenTaiKhoan' => $attrs['TenTaiKhoan'],
    //         'MatKhau' => Hash::make($attrs['MatKhau']),
    //         'Email' => $attrs['Email'],

    //     ]);

    //     return response([
    //         'taikhoan' => $taikhoan,
    //         'token' => $taikhoan->createToken('secret')->plainTextToken
    //     ]);
    // }
    // public function updatepoint(Request $request){
    //     $request->validate([
    //         'Diem' =>'required',
    //     ]);
    //     $taikhoan = TaiKhoan::where('TenTaiKhoan',$request->TenTaiKhoan)->first();
    //     $taikhoan->Diem = $request->Diem;
    //     $taikhoan->save();
    //     return response([
    //         'message' => 'update success'
    //     ],200);
    // }
    // public function forgotpassword(Request $request){
    //     $p = random_int(100000, 999999);
    //     $ph = Hash::make($p);

    //     Mail::send('email',compact('p'), function($email) use($p){
    //         $email->to('tainat1202@gmail.com' , $p);
    //     });
    // }

    // public function logout(Request $request){
    // $request->user()->currentAccessToken()->delete();
    //     return response([
    //         'message' => 'Logout success'
    //     ],200);
    // }
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
