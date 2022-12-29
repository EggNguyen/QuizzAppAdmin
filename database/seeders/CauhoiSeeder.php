<?php

namespace Database\Seeders;

use App\Models\Cauhoi;
use Illuminate\Database\Seeder;

class CauhoiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Cauhoi::create([
            'ID' => 1,
            'LinhVuc_ID'=>1,
            'NoiDung'=>'Nhiệm vụ chung của cách mạng Việt Nam giai đoạn 1954 - 1975 là',
            'A' => 'Xây dựng chủ nghĩa xã hội ở miền Bắc và kháng chiến chống Mĩ ở miền Nam',
            'B' => 'Xây dựng chủ nghĩa xã hội',
            'C' => 'Kháng chiến chống Mĩ cứu nước',
            'D' => 'Hoàn thành cách mạng dân tộc dân chủ nhân dân ở miền Nam',
            'DapAn' => 'Kháng chiến chống Mĩ cứu nước',
            'Diem' => 10,
            'TrangThai'=>1,
        ]);
        Cauhoi::create([
            'ID' => 2,
            'LinhVuc_ID'=>2,
            'NoiDung'=>'Dừa là đặc sản nổi tiếng của tỉnh nào?',
            'A' => 'Tiền Giang',
            'B' => 'Bến Tre',
            'C' => 'Kiên Giang',
            'D' => 'Đồng Tháp',
            'DapAn' => 'Bến Tre',
            'Diem' => 10,
            'TrangThai'=>1,
        ]);
        Cauhoi::create([
            'ID' => 3,
            'LinhVuc_ID'=>3,
            'NoiDung'=>'Môn thể thao nào được gọi là môn thể thao vua?',
            'A' => 'Bóng Rổ',
            'B' => 'Bóng Đá',
            'C' => 'Điền Kinh',
            'D' => 'Bơi Lội',
            'DapAn' => 'Bóng Đá',
            'Diem' => 10,
            'TrangThai'=>1,
        ]);
    }
}
