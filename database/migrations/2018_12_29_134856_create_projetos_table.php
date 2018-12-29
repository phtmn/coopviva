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
            $table->unsignedInteger('organizacao_id');
            $table->string('foto')->nullable();
            $table->string('banner')->nullable();
            $table->string('nome')->nullable();
            $table->string('categoria')->nullable();
            $table->string('valor')->nullable();
            $table->string('email')->nullable();
            $table->string('responsavel')->nullable();
            $table->softDeletes();
            $table->timestamps();
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
