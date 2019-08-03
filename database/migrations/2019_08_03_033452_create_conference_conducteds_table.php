<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferenceConductedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_conducteds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('teacher_name');
            $table->string('conf_name');
            $table->string('topic');
            $table->date('date');
            $table->string('institute_conducted_for');
            $table->string('photograph');
            $table->string('duration');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conference_conducteds');
    }
}
