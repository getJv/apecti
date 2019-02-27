<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDonesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('apecti.dones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('rastreador_externo',50)->comment('Pode ser um numero de processo SEI ou da ferramenta onde o DONE será utilizado');
            $table->string('autor_login');
            $table->integer('ramal');
            $table->text('introducao');
            $table->text('riscos');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('apecti.dones');
    }
}
