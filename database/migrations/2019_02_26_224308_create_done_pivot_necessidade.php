<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonePivotNecessidade extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apecti.done_necessidade', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('necessidade');
            $table->text('descricao');
            $table->enum('tipo', ['Nova', 'Alteração', 'Exclusão']);
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
        Schema::dropIfExists('apecti.done_necessidade');
    }
}
