<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddCamposOscTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('oscs',function (Blueprint $table){
           $table->text('video_institucional')->nullable();
           $table->text('fan_page')->nullable();
           $table->text('instagram')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('oscs', function (Blueprint $table){
            $table->dropColumn('video_institucional');
            $table->dropColumn('fan_page');
            $table->dropColumn('instagram');
        });
    }
}
