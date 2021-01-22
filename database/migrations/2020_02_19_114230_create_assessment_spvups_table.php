<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAssessmentSpvupsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assessment_spvups', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->date('bulan');
            $table->date('tahun');
            $table->char('ks1',1);
            $table->char('ks2',1);
            $table->char('ks3',1);
            $table->char('ks4',1);
            $table->char('ks5',1);
            $table->char('ks6',1);
            $table->char('ks7',1);
            $table->char('ks8',1);
            $table->char('ks9',1);
            $table->char('ks10',1);
            $table->char('ks11',1);
            $table->char('ks12',1);
            $table->char('ks13',1);
            $table->char('ks14',1);
            $table->char('ks15',1);
            $table->char('ks16',1);
            $table->char('ks17',1);
            $table->LongText('km1',900);
            $table->LongText('km2',900);
            $table->LongText('km3',900);
            $table->LongText('km4',900);
            $table->LongText('km5',900);
            $table->LongText('km6',900);
            $table->LongText('km7',900);
            $table->LongText('km8',900);
            $table->LongText('km9',900);
            $table->LongText('km10',900);
            $table->LongText('km11',900);
            $table->LongText('km12',900);
            $table->LongText('km13',900);
            $table->LongText('km14',900);
            $table->LongText('km15',900);
            $table->LongText('km16',900);
            $table->LongText('km17',900);
            $table->LongText('komentar',2000);
            $table->char('id_ternilai',9);
            $table->char('id_penilai',9);
            $table->string('nama_ternilai',50);
            $table->string('nama_penilai',50);
            $table->string('approve');
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
        Schema::dropIfExists('assessment_spvups');
    }
}
