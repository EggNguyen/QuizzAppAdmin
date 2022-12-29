<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Linhvuc;

class LinhvucSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Linhvuc::create(['ID' => 1,'Ten'=> 'Lịch Sử' , 'TrangThai'=>1]);
        Linhvuc::create(['ID' => 2,'Ten'=> 'Địa Lý' , 'TrangThai'=>1]);
        Linhvuc::create(['ID' => 3,'Ten'=> 'Thể Thao' , 'TrangThai'=>1]);

    }
}
