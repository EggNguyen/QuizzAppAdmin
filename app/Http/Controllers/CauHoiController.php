<?php

namespace App\Http\Controllers;

use App\Models\Cauhoi;
use App\Models\Linhvuc;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class CauHoiController extends Controller
{    

    public function show()
    {
        $data = DB::table('cauhoi')->where('TrangThai', 1)->get();
        $linhvuc = LinhVuc::all();

        return view('cauhoi_index', ['data' => $data , 'linhvuc'=>$linhvuc]);
    }
    public function create()
    {        $linhvuc = LinhVuc::all();

        return view('cauhoi.themcauhoi',['linhvuc'=>$linhvuc]);
    }

    public function store(Request $request)
    {   
        $data = $request->all();
        Cauhoi::create($data);
        return redirect('/cauhoi_index');
    }
    public function edit(Cauhoi $cauhoiall,$ID)
    {
        $cauhoi = Cauhoi::find($ID);
        $linhvuc = Linhvuc::all();
        return view('cauhoi.edit',['linhvuc'=>$linhvuc , 'cauhoiall'=>$cauhoiall], compact('cauhoi'));
    }
    public function update(Request $request, $ID)
    {
        $cauhoi = Cauhoi::find($ID);
        $cauhoi->NoiDung = $request->input('NoiDung');
        $cauhoi->LinhVuc_ID = $request->input('LinhVuc_ID');
        $cauhoi->A = $request->input('A');
        $cauhoi->B = $request->input('B');
        $cauhoi->C = $request->input('C');
        $cauhoi->D = $request->input('D');
        $cauhoi->DapAn = $request->input('DapAn');
        $cauhoi->Diem = $request->input('Diem');

        $cauhoi->save();
        return redirect('/cauhoi_index');
    }
    public function softdelete(Request $request, $ID)
    {
        $cauhoi = Cauhoi::find($ID);
        $cauhoi->TrangThai = 0;

        $cauhoi->update();
        return redirect('/cauhoi_index');
    }
}