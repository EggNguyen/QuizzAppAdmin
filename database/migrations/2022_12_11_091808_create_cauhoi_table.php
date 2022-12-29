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
        Schema::create('cauhoi', function (Blueprint $table) {
            $table->integer('ID')->primary();
            $table->integer('LinhVuc_ID')->index('LinhVucID_CauHoi');
            $table->string('NoiDung');
            $table->string('A');
            $table->string('B');
            $table->string('C');
            $table->string('D');
            $table->string('DapAn');
            $table->integer('Diem');
            $table->integer('TrangThai')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cauhoi');
    }
};
