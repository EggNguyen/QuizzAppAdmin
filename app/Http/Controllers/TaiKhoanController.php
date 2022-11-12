<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TaiKhoan;
use Illuminate\Support\Facades\DB;
class TaiKhoanController extends Controller
{       public function show(){
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