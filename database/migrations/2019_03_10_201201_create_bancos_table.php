<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateBancosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('bancos', function(Blueprint $table)
		{
            $table->increments('id');
			$table->string('banco', 10);
			$table->string('agencia', 100);
			$table->string('conta');
			$table->string('contaDv');
			$table->unsignedInteger('tipo_conta');
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
		Schema::drop('bancos');
	}

}
