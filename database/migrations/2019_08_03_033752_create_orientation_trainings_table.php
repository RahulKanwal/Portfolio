<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOrientationTrainingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orientation_trainings', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('teacher_name');
            $table->string('program_name');
            $table->string('topic');
            $table->string('duration');
            $table->date('date');
            $table->string('institute');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orientation_trainings');
    }
}
