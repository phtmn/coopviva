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
            $table->unsignedInteger('user_id');
            $table->string('nome_completo')->nullable();
            $table->date('data_nascimento')->nullable();
            $table->string('telefone_principal')->nullable();
            $table->string('cpf')->unique()->nullable();
            $table->string('cnpj')->unique()->nullable();
            $table->string('razao_social')->nullable();
            $table->string('nome_fantasia')->nullable();
<<<<<<< HEAD
            $table->string('cep')->nullable();
            $table->string('endereco')->nullable();
            $table->string('cidade')->nullable();
            $table->string('estado')->nullable();
            $table->string('complemento')->nullable();
            $table->enum('tipo_perfil',['O','I','D'])->default('I');
=======
            $table->string('tipo_perfil');
>>>>>>> 86e86227e383d326c53f58afe56b86b750b6ae06
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        
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