<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonePivotPerfil extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('done_perfil', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps()->useCurrent();
            $table->string('perfil')->nullable(value=false);;
            $table->text('atividades')->nullable(value=false);;
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
        Schema::dropIfExists('done_perfil');
    }
}