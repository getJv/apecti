<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonePivotProblema extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apecti.done_problema', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('problema');
            $table->string('afeta');
            $table->text('impacto');
            $table->text('solucao_esperada');
            $table->integer('done_id')->unsigned()->index();
            $table->foreign('done_id')->references('id')->on('dones')->onDelete('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apecti.done_problema');
    }
}
