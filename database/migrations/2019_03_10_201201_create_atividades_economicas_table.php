<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateAtividadesEconomicasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('atividades_economicas', function(Blueprint $table)
		{
            $table->increments('id');
			$table->string('descricao', 100);
			$table->string('cod_atividade', 50);
			$table->string('cnae_fiscal', 50);
			$table->integer('segmento_id');
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
		Schema::drop('atividades_economicas');
	}

}
