<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProjetosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('projetos', function(Blueprint $table)
		{
			$table->increments('id');
			$table->unsignedInteger('osc_id');
			$table->string('nome', 200);
			$table->text('descricao')->nullable();
			$table->string('imagem', 200)->nullable();
			$table->unsignedInteger('instancia_id')->index('instancia_id');
			$table->unsignedInteger('ambito_id')->index('ambito_id');
			$table->unsignedInteger('segmento_id')->index('segmento_id');
			$table->string('num_registro1', 50)->nullable();
			$table->string('num_registro2', 50)->nullable();
			$table->string('artigo', 100)->nullable();
			$table->text('objetivo_geral')->nullable();
			$table->text('objetivos_especificos')->nullable();
			$table->text('justificativa')->nullable();
			$table->text('publico_alvo')->nullable();
			$table->text('impactos_esperados')->nullable();
			$table->string('responsavel_nome', 100)->nullable();
			$table->string('responsavel_cpf_cnpj', 20)->nullable();
			$table->string('responsavel_telefone1', 20)->nullable();
			$table->string('responsavel_telefone2', 20)->nullable();
			$table->string('responsavel_email1', 200)->nullable();
			$table->string('responsavel_email2', 200)->nullable();
			$table->decimal('valor_meta', 15,2);
			$table->unsignedInteger('banco_patrocinio_id');
			$table->unsignedInteger('banco_doacao_id');
			$table->string('status')->default('enviado');
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
		Schema::drop('projetos');
	}

}
