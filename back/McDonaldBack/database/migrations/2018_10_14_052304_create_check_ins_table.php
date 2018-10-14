<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCheckInsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('check_ins', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('child_id');
            $table->date('check_in_date');
            $table->unsignedInteger('hospital_id');
            $table->enum('child_status', ['En casa', 'Hospitalizado', 'Extra']);
            $table->string('attending_doctor', 128);
            $table->string('diagnosis', 128);
            $table->timestamps();
            $table->unsignedInteger('treatment_id');
            $table->unsignedInteger('diet_id');
            $table->unsignedInteger('social_worker_id');
            $table->boolean('re_entry');
            $table->date('check_out_date');
            $table->unsignedInteger('additional_children');
            $table->text('remarks');
            $table->text('assigned_room');
        });

        Schema::table('check_ins', function($table) {
            $table->foreign('child_id')->references('id')->on('children')->onUpdate('cascade');
            $table->foreign('hospital_id')->references('id')->on('hospitals')->onUpdate('cascade');
            $table->foreign('treatment_id')->references('id')->on('treatments')->onUpdate('cascade');
            $table->foreign('diet_id')->references('id')->on('diets')->onUpdate('cascade');
            $table->foreign('social_worker_id')->references('id')->on('social_workers')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('check_ins');
    }
}
