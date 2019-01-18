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
            $table->decimal('valor_meta',24,2)->default(0);
                                  
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
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
