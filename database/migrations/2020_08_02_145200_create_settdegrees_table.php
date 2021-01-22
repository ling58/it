<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSettdegreesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('settdegrees', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nama_penilai')->nullable();
            $table->string('nama_ternilai')->nullable();
            $table->char('user_id')->nullable();
            $table->char('karyawan_id')->nullable();
            $table->string('approval')->nullable();
            $table->char('id_approval')->nullable();
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
        Schema::dropIfExists('settdegrees');
    }
}
