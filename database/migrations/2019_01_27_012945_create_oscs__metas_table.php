<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOscsMetasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meta_osc', function (Blueprint $table) {
            $table->increments('id');

            $table->unsignedInteger('osc_id');
            $table->unsignedInteger('meta_id');


            $table->foreign('osc_id','fk_osc_id')->references('id')->on('oscs')->onDelete('cascade');
            $table->foreign('meta_id','fk_meta_id')->references('id')->on('metas')->onDelete('cascade');
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
        Schema::dropIfExists('meta_osc');
    }
}
