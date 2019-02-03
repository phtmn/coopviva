<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOscMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('osc_metas', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('osc_id');
            $table->unsignedInteger('meta_id');
            $table->integer('objetivo_id')->nullable();
            $table->string('meta_codigo');
            $table->longText('meta_descricao');

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
        Schema::dropIfExists('osc_metas');
    }
}
