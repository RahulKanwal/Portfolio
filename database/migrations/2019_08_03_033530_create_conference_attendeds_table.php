<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConferenceAttendedsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('conference_attendeds', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->string('teacher_name');
            $table->string('topic');
            $table->date('date');
            $table->string('institute_conducted_for');
            $table->string('photograph');
            $table->string('duration');
            $table->string('publication_name');
            $table->string('journal_name');
            $table->string('issn');
            $table->date('issue_date');
            $table->integer('volume_no');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('conference_attendeds');
    }
}
