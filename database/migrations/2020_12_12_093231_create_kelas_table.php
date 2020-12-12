<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKelasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('prodi_id');
            $table->unsignedBigInteger('matakuliah_id');
            $table->unsignedBigInteger('dosen_id');
            $table->string('deskripsi','100');
            $table->timestamps();

            $table->foreign('prodi_id')->references('id')->on('prodis');
            $table->foreign('matakuliah_id')->references('id')->on('matakuliahs');
            $table->foreign('dosen_id')->references('id')->on('dosens');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kelas');
    }
}
