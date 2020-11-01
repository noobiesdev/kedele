<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToDetailPembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('detail_pembelian', function (Blueprint $table) {
            $table->foreign('id_pembelian', 'detail_pembelian_ibfk_1')->references('id')->on('pembelian')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_produk', 'detail_pembelian_ibfk_2')->references('id')->on('produk')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('detail_pembelian', function (Blueprint $table) {
            $table->dropForeign('detail_pembelian_ibfk_1');
            $table->dropForeign('detail_pembelian_ibfk_2');
        });
    }
}
