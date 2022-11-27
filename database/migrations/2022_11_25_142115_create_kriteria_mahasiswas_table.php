<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKriteriaMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kriteria_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->string('mahasiswa');
            $table->float('ipk');
            $table->bigInteger('penghasilan_ortu');
            $table->integer('prestasi_akademik');
            $table->integer('keaktifan_organisasi');
            $table->integer('nilai_wawancara');
            $table->integer('kondisi_tinggal');
            $table->integer('motivation_letter');
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
        Schema::dropIfExists('kriteria_mahasiswas');
    }
}
