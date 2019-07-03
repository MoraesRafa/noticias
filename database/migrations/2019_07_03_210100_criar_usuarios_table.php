<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CriarUsuariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('nome',150);
            $table->string('email',150);
            $table->string('password',150);
            $table->tinyInteger('permissao')->default(0);
            //0-colaborador; 1 editor; 2-administrador;
            $table->string('foto',150);
            $table->text('perfil');
            $table->tinyInteger('status');


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
        Schema::dropIfExists('usuarios');
    }
}
