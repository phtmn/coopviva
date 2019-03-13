<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGaleriasTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('galerias', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('osc_id')->nullable();
			$table->integer('projeto_Id')->nullable();
			$table->string('album')->nullable();
			$table->string('legenda', 200);
			$table->string('aws_url');
			$table->string('aws_name');
			$table->boolean('ativo')->default(1);
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
		Schema::drop('galerias');
	}

}
