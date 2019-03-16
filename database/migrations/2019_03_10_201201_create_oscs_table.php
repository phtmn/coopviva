<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateOscsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('oscs', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('user_id');
			$table->string('nome_fantasia', 200)->nullable();
			$table->string('cnpj', 18)->nullable();
			$table->string('ano_inscricao_cnpj', 4)->nullable();
			$table->string('ano_fundacao', 4)->nullable();
			$table->string('sigla', 50)->nullable();
			$table->string('cnae', 50)->nullable();
			$table->string('responsavel_legal', 200)->nullable();
			$table->unsignedInteger('banco_id')->nullable();
			$table->unsignedInteger('situacao_imovel_id')->nullable();
			$table->unsignedInteger('atividades_economicas_id')->nullable();
			$table->string('email', 200)->nullable();
			$table->string('site', 200)->nullable();
			$table->string('telefone', 20)->nullable();
			$table->string('cep')->nullable();
			$table->string('logradouro', 200)->nullable();
			$table->string('numero', 50)->nullable();
			$table->string('bairro', 200)->nullable();
			$table->string('complemento', 200)->nullable();
			$table->string('cidade', 200)->nullable();
			$table->string('uf', 2)->nullable();
			$table->string('area_atuacao', 200)->nullable();
			$table->string('sub_area1', 200)->nullable();
			$table->string('sub_area2', 200)->nullable();
			$table->text('descricao')->nullable();
			$table->text('surgimento_osc')->nullable();
			$table->text('missao_osc')->nullable();
			$table->text('visao_osc')->nullable();
			$table->text('finalidades_estatutarias_ods')->nullable();
			$table->text('link_estatuto_osc')->nullable();
			$table->string('logo', 200)->nullable();
			$table->timestamps();
			$table->softDeletes();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('oscs');
	}

}
