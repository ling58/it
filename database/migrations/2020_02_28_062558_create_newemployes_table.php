<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNewemployesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('newemployes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pt_id', 50)->nullable();
            $table->string('nomor', 50)->nullable();
            $table->date('pengajuan')->nullable();
            $table->string('direktorat_id')->nullable();
            $table->string('departement_id')->nullable();
            $table->string('duty_id')->nullable();
            $table->string('posisi_id')->nullable();
            $table->string('jabatan_id')->nullable();
            $table->string('kebutuhan')->nullable();
            $table->string('perencanaan')->nullable();
            $table->string('resign')->nullable();
            $table->string('pensiun')->nullable();
            $table->string('meninggal')->nullable();
            $table->string('phk')->nullable();
            $table->string('lain')->nullable();
            $table->string('penjelasan')->nullable();
            $table->string('uraian')->nullable();
            $table->string('edu1')->nullable();
            $table->string('edu2')->nullable();
            $table->string('edu3')->nullable();
            $table->string('edu4')->nullable();
            $table->string('edu5')->nullable();
            $table->string('keahlian')->nullable();
            $table->string('pengalaman')->nullable();
            $table->string('usia')->nullable();
            $table->string('jeskel1')->nullable();
            $table->string('jeskel2')->nullable();
            $table->string('fisik')->nullable();
            $table->string('catatan')->nullable();
            $table->string('diajukan')->nullable();
            $table->string('disetujui')->nullable();
            $table->string('dikettahui')->nullable();
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
        Schema::dropIfExists('newemployes');
    }
}
