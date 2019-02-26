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
        Schema::create('dones', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps()->useCurrent();
            $table->string('rastreador_externo')->comment('Pode ser um numero de processo SEI ou da ferramenta onde o DONE será utilizado');
            $table->string('autor_login')->nullable(value=false);
            $table->integer('ramal',4)->nullable(value=false);
            $table->text('introducao')->nullable(value=false);
            $table->text('necessidade')->nullable(value=false);
            $table->text('impacto');
            $table->text('solucao_esperada');
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
        Schema::dropIfExists('dones');
    }
}
