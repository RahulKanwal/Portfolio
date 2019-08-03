<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOnlineCertificationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('online_certifications', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('teacher_name');
            $table->string('course_name');
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
        Schema::dropIfExists('online_certifications');
    }
}
