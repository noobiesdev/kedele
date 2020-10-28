<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTpmKriteriaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tpm_kriteria', function (Blueprint $table) {
            $table->integer('id', true);
            $table->integer('id_aspek')->nullable()->index('id_aspek');
            $table->string('nama', 64)->nullable();
            $table->integer('nilai')->nullable()->default(0);
            $table->tinyInteger('factor')->nullable()->default(0);
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
        Schema::dropIfExists('tpm_kriteria');
    }
}
