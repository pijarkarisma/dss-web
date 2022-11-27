<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterNilaiDataTypeInAnalisaKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('analisa_kriterias', function (Blueprint $table) {
            $table->decimal('nilai', $precision = 18, $scale = 15)->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('analisa_kriterias', function (Blueprint $table) {
            //
        });
    }
}
