<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateChildrenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('children', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names', 128);
            $table->string('flast_name', 128);
            $table->string('mlast_name', 128);
            $table->date('birthday');
            $table->enum('sex', ['Masculino', 'Femenino']);
            $table->unsignedInteger('scholarship_id');
            $table->string('address_street', 128);
            $table->string('address_number', 128);
            $table->string('neighborhood', 128);
            $table->string('locality', 128);
            $table->string('municipality', 128);
            $table->string('zip_code', 8);
            $table->unsignedInteger('state_id');
            $table->string('phone_1', 16);
            $table->string('phone_2', 16);
            $table->enum('social', ['1','2','3','4','5','6']);
            $table->enum('zone_type', ['Rural', 'Sub-urbana', 'Urbana']);
            $table->enum('min_wage', ['<1', '1 a 2', '>2']);
            $table->timestamps();
        });

        Schema::table('children', function($table) {
            $table->foreign('scholarship_id')->references('id')->on('scholarships')->onUpdate('cascade');
            $table->foreign('state_id')->references('id')->on('states')->onUpdate('cascade');
        });
    }
    

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('children');
    }
}
