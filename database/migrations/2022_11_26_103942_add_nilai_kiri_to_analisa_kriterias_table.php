<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddNilaiKiriToAnalisaKriteriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('analisa_kriterias', function (Blueprint $table) {
            $table->string('nilaiKiri');
            $table->string('nilaiKanan');
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
            $table->dropColumn('nilaiKiri');
            $table->dropColumn('nilaiKanan');
        });
    }
}
