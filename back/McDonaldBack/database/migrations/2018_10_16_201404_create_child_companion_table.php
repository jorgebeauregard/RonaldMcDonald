<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildCompanionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('child_companion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('child_id');
            $table->unsignedInteger('companion_id');
            $table->unsignedInteger('relationship_id');
            $table->timestamps();
        });

        Schema::table('child_companion', function($table) {
            $table->foreign('child_id')->references('id')->on('children')->onUpdate('cascade');
            $table->foreign('companion_id')->references('id')->on('companions')->onUpdate('cascade');
            $table->foreign('relationship_id')->references('id')->on('relationships')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('child_companion');
    }
}
