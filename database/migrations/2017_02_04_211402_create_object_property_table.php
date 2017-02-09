<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateObjectPropertyTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('object_property', function (Blueprint $table) {
            
            $table->unsignedInteger('object_id');
            $table->unsignedInteger('property_id'); 

            $table->foreign('object_id')->references('id')->on('objects');
            $table->foreign('property_id')->references('id')->on('properties');
        });    
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('object_property');
    }
}
