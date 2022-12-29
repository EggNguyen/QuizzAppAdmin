<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('taikhoan', function (Blueprint $table) {
            $table->increments('ID');
            $table->string('TenTaiKhoan');
            $table->string('MatKhau');
            $table->integer('Credit')->nullable()->default(0);
            $table->string('Email')->nullable();
            $table->integer('VaiTro')->default(1);
            $table->integer('TrangThai')->default(1);
            $table->integer('Diem')->default(0);
            $table->rememberToken();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('taikhoan');
    }
};
