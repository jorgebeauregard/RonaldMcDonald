<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rations', function (Blueprint $table) {
            $table->increments('id');
            //id_racion id_morro fecha racion_count
            $table->unsignedInteger('child_id');
            //date created is fecha 
            $table->unsignedInteger('ration_count');
            $table->timestamps();
        });
        Schema::table('rations', function($table) {
            $table->foreign('child_id')->references('id')->on('children')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('rations');
    }
}
