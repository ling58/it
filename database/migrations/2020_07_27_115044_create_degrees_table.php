<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('degrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('pt')->nullable();
            $table->string('nik')->nullable();
            $table->string('nama')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('periode')->nullable();
            $table->string('ks1')->nullable();
            $table->string('ks2')->nullable();
            $table->string('ks3')->nullable();
            $table->string('ks4')->nullable();
            $table->string('ks5')->nullable();
            $table->string('ks6')->nullable();
            $table->string('ks7')->nullable();
            $table->string('ks8')->nullable();
            $table->string('ks9')->nullable();
            $table->string('ks10')->nullable();
            $table->string('ks11')->nullable();
            $table->string('ks12')->nullable();
            $table->string('ks13')->nullable();
            $table->string('ks14')->nullable();
            $table->string('ks15')->nullable();
            $table->string('ks16')->nullable();
            $table->string('ks17')->nullable();
            $table->string('km1')->nullable();
            $table->string('km2')->nullable();
            $table->string('km3')->nullable();
            $table->string('km4')->nullable();
            $table->string('km5')->nullable();
            $table->string('km6')->nullable();
            $table->string('km7')->nullable();
            $table->string('km8')->nullable();
            $table->string('km9')->nullable();
            $table->string('km10')->nullable();
            $table->string('km11')->nullable();
            $table->string('km12')->nullable();
            $table->string('km13')->nullable();
            $table->string('km14')->nullable();
            $table->string('km15')->nullable();
            $table->string('km16')->nullable();
            $table->string('km17')->nullable();   
            $table->string('komentar')->nullable();
            $table->string('penilai')->nullable();
            $table->string('user_id')->nullable();
            $table->char('karyawan_id')->nullable();
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
        Schema::dropIfExists('degree');
    }
}
