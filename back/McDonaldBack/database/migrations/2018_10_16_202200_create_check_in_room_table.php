<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckInRoomTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_in_room', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('check_in_id');
            $table->unsignedInteger('room_id');
            $table->boolean('active');
            $table->timestamps();
        });

        Schema::table('check_in_room', function($table) {
            $table->foreign('check_in_id')->references('id')->on('check_ins')->onUpdate('cascade');
            $table->foreign('room_id')->references('id')->on('rooms')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_in_room');
    }
}
