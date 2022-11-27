<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableNilaiMahasiswasChangePenghasilanOrtu extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_mahasiswas', function (Blueprint $table) {
            $table->bigInteger('penghasilan_ortu')->change();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('nilai_mahasiswas', function (Blueprint $table) {
            //
        });
    }
}
