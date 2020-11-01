<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTpmProfileTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tpm_profile', function (Blueprint $table) {
            $table->foreign('id_kriteria', 'tpm_profile_ibfk_1')->references('id')->on('tpm_kriteria')->onUpdate('RESTRICT')->onDelete('RESTRICT');
            $table->foreign('id_kedelai', 'tpm_profile_ibfk_2')->references('id')->on('kategori_kedelai')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tpm_profile', function (Blueprint $table) {
            $table->dropForeign('tpm_profile_ibfk_1');
            $table->dropForeign('tpm_profile_ibfk_2');
        });
    }
}
