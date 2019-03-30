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
           $table->text('espaco_livre')->nullable();
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
       
        if(Schema::hasColumn('oscs','espaco_livre')){            
            Schema::table('oscs',function(Blueprint $table){                               
                $table->dropColumn('espaco_livre');               
            });        
       }
    }
}
