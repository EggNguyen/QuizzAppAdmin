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
        Schema::create('lichsu', function (Blueprint $table) {
            $table->integer('ID');
            $table->integer('ID_TaiKhoan');
            $table->integer('SoCauDung');
            $table->integer('TongDiem');
            $table->timestamp('NgayChoi')->useCurrent();
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
        Schema::dropIfExists('lichsu');
    }
};
