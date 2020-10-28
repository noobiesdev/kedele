<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddForeignKeysToTpmKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('tpm_kriteria', function (Blueprint $table) {
            $table->foreign('id_aspek', 'tpm_kriteria_ibfk_1')->references('id')->on('tpm_aspek')->onUpdate('RESTRICT')->onDelete('RESTRICT');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('tpm_kriteria', function (Blueprint $table) {
            $table->dropForeign('tpm_kriteria_ibfk_1');
        });
    }
}
