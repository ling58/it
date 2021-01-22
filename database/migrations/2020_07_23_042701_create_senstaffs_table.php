<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSenstaffsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('senstaffs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('p1');
            $table->string('p2');
            $table->string('p3');
            $table->string('p4');
            $table->string('p5');
            $table->string('p6');
            $table->string('p7');
            $table->string('p8');
            $table->string('p9');
            $table->string('p10');
            $table->string('p11');
            $table->string('p12');
            $table->string('p13');
            $table->string('kekuatan')->nullable();
            $table->string('kelemahan')->nullable();
            $table->string('rencana')->nullable();
            $table->string('user_id')->nullable();
            $table->string('karyawan_id')->nullable();
            $table->string('nama')->nullable();
            $table->string('jabatan')->nullable();
            $table->string('nik')->nullable();
            $table->string('departement')->nullable();
            $table->string('duty')->nullable();
            $table->string('penilai')->nullable();
            $table->string('status')->nullable();
            $table->string('level')->nullable();
            $table->date('masuk');
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
        Schema::dropIfExists('senstaffs');
    }
}
