<?php

namespace Database\Seeders;

use App\Models\Taikhoan;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class TaikhoanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Taikhoan::create([
            'ID' => 1,
            'TenTaiKhoan'=>'TruongTai',
            'MatKhau'=>Hash::make('123456'),
            'Credit'=>0,
            'Email'=>'truongtai@gmail.com',
            'VaiTro'=>0,
            'Diem'=>0,
            'TrangThai'=>1,
        ]);
        Taikhoan::create([
            'ID' => 2,
            'TenTaiKhoan'=>'TanKhoa',
            'MatKhau'=>Hash::make('123456'),
            'Credit'=>0,
            'Email'=>'tankhoa@gmail.com',
            'VaiTro'=>0,
            'Diem'=>0,
            'TrangThai'=>1,
        ]);
        Taikhoan::create([
            'ID' => 3,
            'TenTaiKhoan'=>'DangKhoa',
            'MatKhau'=>Hash::make('123456'),
            'Credit'=>0,
            'Email'=>'dangkhoa@gmail.com',
            'VaiTro'=>0,
            'Diem'=>0,
            'TrangThai'=>1,
        ]);
    }
}
