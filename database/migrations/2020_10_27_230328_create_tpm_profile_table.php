<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpmProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpm_profile', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_kedelai')->nullable()->index('id_kedelai');
            $table->integer('id_kriteria')->nullable()->index('id_kriteria');
            $table->integer('nilai')->nullable();
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
        Schema::dropIfExists('tpm_profile');
    }
}
