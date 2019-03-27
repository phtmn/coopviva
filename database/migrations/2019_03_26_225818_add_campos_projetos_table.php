<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('projetos',function(Blueprint $table){
            $table->date('inicio_captacao')->nullable();
            $table->date('fim_captacao')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('projetos', function (Blueprint $table){
            $table->dropColumn('inicio_captacao');
            $table->dropColumn('fim_captacao');
        });
    }
}
