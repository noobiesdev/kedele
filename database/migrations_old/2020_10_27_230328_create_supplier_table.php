<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplierTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplier', function (Blueprint $table) {
            $table->integer('id', true);
            $table->string('nama', 128)->nullable();
            $table->string('maps')->nullable();
            $table->string('kategori', 64)->nullable();
            $table->string('whatsapp', 14)->nullable();
            $table->string('twitter', 32)->nullable();
            $table->string('instagram', 32)->nullable();
            $table->string('facebook', 32)->nullable();
            $table->string('marketplace', 128)->nullable();
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
        Schema::dropIfExists('supplier');
    }
}
