<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contatos', function (Blueprint $table) {
            //campo id que já vem por padrão
            $table->bigIncrements('id');

            //campos do contato
            //string() geralmente cria varchar, não é necessario especificar o tamanho
            $table->string('nome');
            $table->string('email');
            $table->string('telefone');

            //nesse vamos usar text para separar um espaco maior
            $table->text('mensagem');

            //aqui vamos guardar o path do arquivo armazenado
            $table->string('path_arquivo');

            //guardando o ip -- esse pode ser vazio
            $table->string('ip_acesso')->nullable();

            //campos de data - created_at e updated_at
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
        Schema::dropIfExists('contatos');
    }
}
