<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('email')->index('email')->unique();
            $table->string('password');
            $table->string('nome_social', 100)->nullable()->index('nome');
            $table->string('nome_completo', 100)->nullable();
            $table->string('tipo_pessoa',2);
            $table->date('dt_nascimento')->nullable();
            $table->enum('genero', ['M','F'])->nullable();
            $table->string('cpf_cnpj', 50)->nullable();
            $table->string('razao_social', 100)->nullable();
            $table->string('nome_fantasia', 100)->nullable();
            $table->string('cep')->nullable();
            $table->string('logradouro', 200)->nullable();
            $table->string('numero', 50)->nullable();
            $table->string('complemento', 200)->nullable();
            $table->string('bairro', 200)->nullable();
            $table->string('cidade', 200)->nullable();
            $table->string('uf', 2)->nullable();
            $table->string('telefone')->nullable();
            $table->string('celular')->nullable();
            $table->string('banco_id', 2)->nullable();
            $table->boolean('ativo')->default(0);
            $table->text('imagem')->nullable();
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            $table->unsignedInteger('perfil_id')->index('perfil_id');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('users');
    }
}
