<?php

namespace App\Http\Controllers;

use App\Models\Lichsu;
use App\Models\Taikhoan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LichSuController extends Controller
{    

    public function show()
    {
        $data = DB::table('lichsu')->where('TrangThai', 1)->get();
        $lichsu = Lichsu::all();
        $taikhoan = Taikhoan::all();


        return view('lichsu_index', ['data' => $data , 'taikhoan'=>$taikhoan]);
    }

    public function edit($ID)
    {
        $lichsu = Lichsu::find($ID);
        return view('lichsu.edit', compact('lichsu'));
    }
    public function update(Request $request, $ID)
    {
        $lichsu = Lichsu::find($ID);

        $lichsu->SoCauDung = $request->input('SoCauDung');
        $lichsu->TongDiem = $request->input('TongDiem');
        $lichsu->NgayChoi = $request->input('NgayChoi');

        $lichsu->save();
        return redirect('/lichsu_index');
    }
    public function softdelete(Request $request, $ID)
    {
        $lichsu = Lichsu::find($ID);
        $lichsu->TrangThai = 0;

        $lichsu->update();
        return redirect('/lichsu_index');
    }
}