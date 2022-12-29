<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Lichsu;

class LichsuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lichsu::create([
            'ID' => 1,
            'ID_TaiKhoan'=>1,
            'SoCauDung'=>0,
            'TongDiem'=>0,
            'NgayChoi'=>'2022-12-22	',
            'TrangThai'=>1,
        ]);
        Lichsu::create([
            'ID' => 2,
            'ID_TaiKhoan'=>2,
            'SoCauDung'=>0,
            'TongDiem'=>0,
            'NgayChoi'=>'2022-12-22	',
            'TrangThai'=>1,
        ]);
        Lichsu::create([
            'ID' => 3,
            'ID_TaiKhoan'=>3,
            'SoCauDung'=>0,
            'TongDiem'=>0,
            'NgayChoi'=>'2022-12-22	',
            'TrangThai'=>1,
        ]);
    }
}
