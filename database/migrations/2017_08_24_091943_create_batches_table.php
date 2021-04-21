<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBatchesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('batches', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id')->unsigned();
            $table->string('batch_name');
            $table->string('teacher_name');
            $table->string('course_image');
            $table->string('batch_image1');
            $table->string('batch_image2');
            $table->string('batch_image3');
            $table->text('timetable');
            $table->string('timeslot');
            $table->text('syllabus');
            $table->string('syllabus_pdf');
            $table->string('fee');
            $table->string('gst');
            $table->string('discount');
            $table->string('course_final_fee');
            $table->string('course_duration');
            $table->string('seats_available');
            $table->text('description');

            $table->string('remark1');
            $table->string('remark2');
            $table->string('remark3');
            $table->string('remark4');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('batches');
    }
}
