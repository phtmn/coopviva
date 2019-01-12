<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('descricao');
            $table->string('imagem')->nullable();
            $table->string('instancia')->nullable();
            $table->string('ambito')->nullable();
            $table->string('num_registro1')->nullable();
            $table->string('num_registro2')->nullable();
            $table->string('segmento_cultural')->nullable();
            $table->string('artigo')->nullable();
            
            $table->string('banco_patrocinio')->nullable();
            $table->string('banco_agencia_patrocinio')->nullable();
            $table->string('banco_conta_patrocinio')->nullable();

            $table->string('banco_doacao')->nullable();
            $table->string('banco_agencia_doacao')->nullable();
            $table->string('banco_conta_doacao')->nullable();
            
            $table->string('nome_prop')->nullable();
            $table->string('documento_prop')->nullable();
            $table->string('assinatura')->nullable();
            $table->string('responsável_empresa')->nullable();
            $table->string('telefone_1')->nullable();
            $table->string('telefone_2')->nullable();
            $table->string('email_principal')->nullable();
            $table->string('email_secundario')->nullable();

            $table->decimal('valor_meta',24,2)->default(0);
                                  
            $table->timestamps();

            $table->foreign('osc_id')->references('id')->on('oscs')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
    }
}
