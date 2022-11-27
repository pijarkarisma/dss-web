<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddHasilAkhirToNilaiMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('nilai_mahasiswas', function (Blueprint $table) {
            $table->decimal('hasil_akhir', $precision = 18, $scale = 15);
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
            $table->dropColumn('hasil_akhir');
        });
    }
}
