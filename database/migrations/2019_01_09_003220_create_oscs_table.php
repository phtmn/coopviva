<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOscsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('oscs', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('user_id');
            $table->string('nome_fantasia')->nullable();
            $table->string('sigla_osc');
            $table->string('situacao_imovel')->nullable();
            $table->string('responsavel_legal')->nullable();
            $table->string('ano_inscricao_cnpj')->nullable();
            $table->string('ano_fundacao')->nullable();
            $table->string('email')->unique()->nullable();
            $table->string('decricao_osc')->nullable();
            $table->string('site')->nullable();
            $table->string('telefone')->nullable();
            $table->string('objetivo_ods')->nullable();
            $table->string('metas_ods')->nullable();
            $table->string('atividade_economica')->nullable();
            $table->string('area_atuacao')->nullable();
            $table->string('sub_area1')->nullable();
            $table->string('sub_area2')->nullable();
            $table->text('surgimento_osc')->nullable();
            $table->text('missao_osc')->nullable();
            $table->text('visao_osc')->nullable();
            $table->text('finalidades_estatutarias_ods')->nullable();
            $table->string('link_estatuto_osc')->nullable();	
            $table->timestamps();

            $table->foreign('user_id')
                    ->references('id')
                    ->on('users')
                    ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('oscs');
    }
}
