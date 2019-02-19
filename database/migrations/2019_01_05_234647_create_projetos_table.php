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
            $table->string('descricao');
            $table->string('imagem')->nullable();
            $table->string('instancia')->nullable();
            $table->string('ambito')->nullable();
            $table->string('num_registro1')->nullable();
            $table->string('num_registro2')->nullable();
            $table->string('segmento_cultural')->nullable();
            $table->string('artigo')->nullable();
            $table->longText('objetivo_geral')->nullable();
            $table->longText('objetivos_esp')->nullable();
            $table->longText('justificativa')->nullable();
            $table->longText('publico_alvo')->nullable();
            $table->longText('impactos_esperados')->nullable();
            $table->decimal('valor_meta',24,2)->default(0);
            $table->unsignedInteger('osc_id');
            $table->unsignedInteger('proponente_id');
            $table->unsignedInteger('banco_patrocinio_id');
            $table->unsignedInteger('banco_doacao_id');

            $table->timestamps();
            $table->softDeletes();

            $table->foreign('osc_id')->references('id')->on('oscs')->onDelete('cascade');
            $table->foreign('proponente_id')->references('id')->on('pessoas')->onDelete('cascade');
            $table->foreign('banco_patrocinio_id')->references('id')->on('bancos')->onDelete('cascade');
            $table->foreign('banco_doacao_id')->references('id')->on('bancos')->onDelete('cascade');
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
