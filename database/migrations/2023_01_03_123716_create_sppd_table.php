<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSppdTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sppd', function (Blueprint $table) {
            $table->id();
            $table->string('uniq')->unique();
            $table->bigInteger('nik')->nullable();
            $table->integer('jenis_bantuan_id')->nullable();
            $table->integer('tahun')->nullable();
            $table->integer('tahab')->nullable();
            $table->boolean('status')->nullable();
            $table->string('nominal')->nullable();
            $table->text('catatan')->nullable();
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
        Schema::dropIfExists('sppd');
    }
}
