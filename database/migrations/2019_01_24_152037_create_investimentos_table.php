<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInvestimentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('investimentos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('tipo');
            $table->string('operacao');
            $table->string('descricao')->nullable();
            $table->decimal('valor_investimento',24,2)->default(0);
            $table->string('status');
            $table->string('formaPagamento')->nullable();
            $table->string('mp_codigo')->nullable();
            $table->string('mp_pagamento')->nullable();
            $table->unsignedInteger('user_id');
            $table->unsignedInteger('projeto_id')->nullable();
            $table->unsignedInteger('osc_id')->nullable();
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
        Schema::dropIfExists('investimentos');
    }
}
