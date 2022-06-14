<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('renter_preferences', function(Blueprint $table ){
            $table->id(); 
            $table->unsignedBigInteger('user_id'); 
            $table->foreign('user_id')->references('id')->on('users');
            $table->int('price_lowest'); 
            $table->int('price_highest'); 
            $table->string('location', 255); 
            $table->int('bedrooms');
            $table->float('bathrooms', 3,2);  
            $table->boolean('parking'); 
            $table->boolean('children'); 
            $table->boolean('pets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
};
