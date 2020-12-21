<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProdukTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produk', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_usaha')->index('id_usaha');
            $table->string('nama', 128)->nullable();
            $table->text('deskripsi')->nullable();
            $table->float('kebutuhan_bahan', 10, 0)->nullable();
            $table->integer('harga')->nullable();
            $table->string('slug', 64)->nullable();
            $table->string('gambar', 128)->nullable();
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
        Schema::dropIfExists('produk');
    }
}
