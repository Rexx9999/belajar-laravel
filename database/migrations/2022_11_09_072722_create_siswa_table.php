<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSiswaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        if (!Schema::hasTable('siswa')) {
            Schema::create('siswa', function (Blueprint $table) {
                $table->id();
                //nis menggunakan tipe data integer
                $table->integer('nisn');
                //nama menggunakan tipe data varchar
                $table->string('nama', 100);
                //alamat  menggunakan tipe data varchar
                $table->string('alamat', 200);
                //menggunakan string  menggunakan tipe data varchar
                $table->string('jenis_kelamin');
                //menggunakan enum  menggunakan tipe data enum
                $table->timestamps();
            });
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('siswa');
    }
}
