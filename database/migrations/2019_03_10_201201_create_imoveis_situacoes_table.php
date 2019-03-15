<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateImoveisSituacoesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('imoveis_situacoes', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('descricao', 50)->nullable();
			$table->integer('pontuacao')->nullable();
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
		Schema::drop('imoveis_situacoes');
	}

}
