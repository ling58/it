<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeavesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('leaves', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama', 100)->nullable();
            $table->char('nik', 9)->nullable();
            $table->string('jabatan_id', 100)->nullable();
            $table->string('pt_id')->nullable();
            $table->string('direktorat_id')->nullable();
            $table->string('departement_id')->nullable();
            $table->string('duty_id')->nullable();
            $table->string('alasan',400)->nullable();
            $table->string('alamat',400)->nullable();
            $table->string('hubungi',100)->nullable();
            $table->string('namapeng',100)->nullable();
            $table->string('nikpeng')->nullable();
            $table->string('jabatanpeng_id')->nullable();
            $table->string('cutiambil')->nullable();
            $table->date('cutimulai')->nullable();
            $table->date('cutisampai')->nullable();
            $table->date('masukkembali')->nullable();
            $table->string('status');
            $table->string('catat')->nullable();
            $table->string('user');
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
        Schema::dropIfExists('leaves');
    }
}
