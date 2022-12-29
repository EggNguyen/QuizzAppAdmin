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
        Schema::table('cauhoi', function (Blueprint $table) {
            $table->foreign(['LinhVuc_ID'], 'LinhVucID_CauHoi')->references(['ID'])->on('linhvuc');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('cauhoi', function (Blueprint $table) {
            $table->dropForeign('LinhVucID_CauHoi');
        });
    }
};
