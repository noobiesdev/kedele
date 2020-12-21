<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWebsiteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('website', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_usaha')->index('id_usaha');
            $table->string('gambar_jumbotron', 128)->nullable();
            $table->string('judul_jumbotron', 128)->nullable();
            $table->text('teks_jumbotron')->nullable();
            $table->geometry('maps')->nullable();
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
        Schema::dropIfExists('website');
    }
}
