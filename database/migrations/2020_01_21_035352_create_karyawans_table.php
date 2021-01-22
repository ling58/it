<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateKaryawansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('karyawans', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->char('user_id');
            $table->string('nama', 100);
            $table->char('nik', 9);
            $table->string('email', 100);
            $table->string('jabatan_id');
            $table->string('direktorat_id');
            $table->string('departement_id');
            $table->string('duty_id');
            $table->string('level_id');
            $table->date('masuk')->nullable();
            $table->char('cuti', 2)->nullable();
            $table->string('pt_id', 5)->nullable();
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
        Schema::dropIfExists('karyawans');
    }
}
