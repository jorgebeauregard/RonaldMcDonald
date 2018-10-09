<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCompanionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('companions', function (Blueprint $table) {
            $table->increments('id');
            $table->string('names', 128);
            $table->string('flast_name', 128);
            $table->string('mlast_name', 128);
            $table->unsignedInteger('age');
            $table->enum('sex', ['Masculino', 'Femenino']);
            $table->unsignedInteger('relationship_id');
            $table->unsignedInteger('scholarship_id');
            $table->string('identification', 128);
            $table->timestamps();
            $table->enum('health_status', ['Sano', 'En tratamiento', 'Enfermo']);
            $table->tinyInteger('working');
            $table->unsignedInteger('occupation_id');
            $table->tinyInteger('paid_leave');
            $table->tinyInteger('healthcare');
            $table->unsignedInteger('economic_dependencies');
            $table->tinyInteger('home_owner');
            $table->decimal('rent', 10, 2);
            $table->tinyInteger('financial_aid');
            $table->decimal('monthly_income', 10, 2);
            $table->text('remarks');
        });

        Schema::table('children', function($table) {
            $table->foreign('relationship_id')->references('id')->on('relationships')->onUpdate('cascade');
            $table->foreign('scholarship_id')->references('id')->on('scholarships')->onUpdate('cascade');
            $table->foreign('occupation_id')->references('id')->on('occupations')->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('companions');
    }
}