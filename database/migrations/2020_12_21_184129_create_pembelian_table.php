<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePembelianTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pembelian', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_pembeli')->index('id_pembeli');
            $table->integer('id_usaha');
            $table->string('kode_pemesanan', 12);
            $table->integer('total_harga');
            $table->enum('status', ['dipesan', 'diproses', 'dikirim', 'batal']);
            $table->timestamp('created_at')->useCurrent();
            $table->dateTime('updated_at')->nullable();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pembelian');
    }
}
