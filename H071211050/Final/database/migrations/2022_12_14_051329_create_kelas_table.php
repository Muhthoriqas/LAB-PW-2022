<?php

use App\Models\MataKuliah;
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
            $table->id()->autoIncrement();
            $table->string('nama');
            $table->string('deskripsi');
            $table->unsignedBigInteger('matakuliah_id');
            $table->foreign('matakuliah_id')->references('id')->on('mata_kuliahs');
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
        Schema::dropIfExists('kelas');
    }
}
