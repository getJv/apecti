<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonePivotRefdoc extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apecti.done_refdoc', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('documento');
            $table->text('descricao');
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
        Schema::dropIfExists('apecti.done_refdoc');
    }
}
