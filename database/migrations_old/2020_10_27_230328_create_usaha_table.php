<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsahaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usaha', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_pengusaha')->index('id_pengusaha');
            $table->string('nama', 16);
            $table->string('slug', 64);
            $table->text('deskripsi')->nullable();
            $table->tinyInteger('has_npwp')->nullable()->default(0);
            $table->string('nama_pemilik', 128)->nullable();
            $table->string('nomor_pemilik', 32)->nullable();
            $table->string('bukti_pemilik', 128)->nullable();
            $table->integer('jumlah_bahan')->nullable()->default(0);
            $table->string('kualitas_bahan', 64)->nullable();
            $table->char('status', 3)->nullable()->default('non');
            $table->date('masa_aktif')->nullable();
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
        Schema::dropIfExists('usaha');
    }
}
