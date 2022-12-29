<?php

namespace App\Http\Controllers;

use App\Models\Linhvuc;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class LinhVucController extends Controller
{
    public function show()
    {
        $data = DB::table('linhvuc')->where('TrangThai', 1)->get();
        return view('linhvuc_index', ['data' => $data]);
    }
    public function create()
    {
        return view('linhvuc.themlinhvuc');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        Linhvuc::create($data);
        return redirect('/linhvuc_index');
    }
    public function edit($ID)
    {
        $linhvuc = Linhvuc::find($ID);
        return view('linhvuc.edit', compact('linhvuc'));
    }
    public function update(Request $request, $ID)
    {
        $linhvuc = Linhvuc::find($ID);
        $linhvuc->Ten = $request->input('Ten');
        $linhvuc->update();
        return redirect('/linhvuc_index');
    }
    public function softdelete(Request $request, $ID)
    {
        $taikhoan = Linhvuc::find($ID);
        $taikhoan->TrangThai = 0;

        $taikhoan->update();
        return redirect('/linhvuc_index');
    }
}