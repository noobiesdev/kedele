<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToPengajuanBahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('pengajuan_bahan', function (Blueprint $table) {
            $table->foreign('id_usaha', 'pengajuan_bahan_ibfk_1')->references('id')->on('usaha')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_supplier', 'pengajuan_bahan_ibfk_2')->references('id')->on('supplier')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('pengajuan_bahan', function (Blueprint $table) {
            $table->dropForeign('pengajuan_bahan_ibfk_1');
            $table->dropForeign('pengajuan_bahan_ibfk_2');
        });
    }
}
