<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBobotAlternatifsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bobot_alternatifs', function (Blueprint $table) {
            $table->id();
            $table->string('mahasiswa');
            $table->decimal('ipk', $precision = 18, $scale = 15);
            $table->decimal('penghasilan_ortu', $precision = 18, $scale = 15);
            $table->decimal('prestasi_akademik', $precision = 18, $scale = 15);
            $table->decimal('keaktifan_organisasi', $precision = 18, $scale = 15);
            $table->decimal('nilai_wawancara', $precision = 18, $scale = 15);
            $table->decimal('kondisi_tinggal', $precision = 18, $scale = 15);
            $table->decimal('motivation_letter', $precision = 18, $scale = 15);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bobot_alternatifs');
    }
}
