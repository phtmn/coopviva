<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePerfilInvestidorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('perfil_investidors', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->on('users')->references('id');
            $table->string('photo')->nullable();
            $table->string('full_name');
            $table->string('cargo');            
            $table->string('document');
            $table->string('phone_number');           
            $table->string('user_type')->nullable();
           
            $table->string('postal_code')->nullable();
            $table->string('address')->nullable();
            $table->string('number')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('complement')->nullable();            

            $table->string('checking_account')->nullable();
            $table->string('bank_agency')->nullable();
            $table->string('account_type')->nullable();
            $table->string('operation')->nullable();
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
        Schema::dropIfExists('perfil_investidors');
    }
}
