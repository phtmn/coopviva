<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfils', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome_completo')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('telefone')->nullable();
            $table->string('email')->nullable();
            $table->string('cpf')->unique()->nullable();
            $table->string('cnpj')->unique()->nullable();
            $table->string('razao_social')->nullable();
            $table->string('nome_fantasia')->nullable();

            $table->unsignedInteger('user_id');
            $table->unsignedInteger('endereco_id');
            $table->unsignedInteger('banco_id');

            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('endereco_id')->references('id')->on('enderecos');
            $table->foreign('banco_id')->references('id')->on('bancos');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('perfils');
    }
}
