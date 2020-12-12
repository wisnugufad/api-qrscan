<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAbsenMahasiswasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absen_mahasiswas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('kelas_mahasiswa_id');
            $table->dateTime('pertemuan_01');
            $table->dateTime('pertemuan_02');
            $table->dateTime('pertemuan_03');
            $table->dateTime('pertemuan_04');
            $table->dateTime('pertemuan_05');
            $table->dateTime('pertemuan_06');
            $table->dateTime('pertemuan_07');
            $table->dateTime('pertemuan_08');
            $table->dateTime('pertemuan_09');
            $table->dateTime('pertemuan_10');
            $table->dateTime('pertemuan_11');
            $table->dateTime('pertemuan_12');
            $table->dateTime('pertemuan_13');
            $table->dateTime('pertemuan_14');
            $table->dateTime('pertemuan_15');
            $table->timestamps();

            $table->foreign('kelas_mahasiswa_id')->references('id')->on('kelas_to_mahasiswas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('absen_mahasiswas');
    }
}
