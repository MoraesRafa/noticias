<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarNoticiasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('noticias', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('titulo',100);
            $table->string('slug',100)->unique();
            $table->string('subtitulo')->nullable();
            $table->text('descricao');
            $table->tinyInteger('status')->default(0);
            $table->timestamps();

            $table->bigInteger('usuario_id')->unsigned();
            $table->bigInteger('categoria_id')->unsigned();
    

            $table->foreign('usuario_id')->references('id')->on('usuarios');
            $table->foreign('categoria_id')->references('id')->on('categorias');

            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('noticias');
    }
}
