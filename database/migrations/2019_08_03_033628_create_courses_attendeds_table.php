<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCoursesAttendedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_attendeds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('teacher_name');
            $table->string('course_name');
            $table->string('topic');
            $table->string('domain');
            $table->string('period');
            $table->date('date');
            $table->string('conducting_organization');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_attendeds');
    }
}
