<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDataKpmTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data_kpm', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('nik')->nullable()->unique();
            $table->string('nama_penerima')->nullable();
            $table->string('kecamatan')->nullable();
            $table->string('desa_kelurahan')->nullable();
            $table->text('alamat')->nullable();
            $table->string('nmpendamping_lama')->nullable();
            $table->string('nmpendamping_baru')->nullable();
            $table->string('dusun')->nullable();
            $table->integer('rt')->nullable();
            $table->integer('rw')->nullable();
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
        Schema::dropIfExists('data_kpm');
    }
}
