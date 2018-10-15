<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckInCompanionTable extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_in_companion', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('companion_id');
            $table->unsignedInteger('check_in_id');
            $table->unsignedInteger('relationship_id');
            $table->timestamps();
        });

        Schema::table('check_in_companion', function($table) {
            $table->foreign('companion_id')->references('id')->on('companions')->onUpdate('cascade');
            $table->foreign('check_in_id')->references('id')->on('check_ins')->onUpdate('cascade');
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
        Schema::dropIfExists('check_in_companion');
    }
}
