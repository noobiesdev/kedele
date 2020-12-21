<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePengajuanBahanTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pengajuan_bahan', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_usaha')->index('id_usaha');
            $table->integer('id_supplier')->index('id_supplier')->nullable();
            // $table->string('kategori_kedelai')->nullable();
            $table->string('kategori_kedelai')->nullable()->index('kategori_kedelai');
            $table->integer('jumlah_bahan');
            $table->string('id_kode_pemesanan', 12);
            $table->enum('status', ['mencari', 'pengujian', 'pengiriman', 'selesai']);
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
        Schema::dropIfExists('pengajuan_bahan');
    }
}
