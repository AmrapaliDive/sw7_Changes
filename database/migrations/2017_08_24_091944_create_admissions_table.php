<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admissions', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('studnt_id')->unsigned();
            $table->integer('franchisee_id')->unsigned();
            $table->integer('batch_id')->unsigned();
            $table->string('course_name');
            $table->text('timetable');
            $table->text('timeslot');
            $table->float('fee');
            $table->string('payment_method')->nullable();
            $table->string('payment_id')->nullable();
            $table->date('admission_date');
            $table->string('remark1')->nullable();
            $table->string('remark2')->nullable();
            $table->string('remark3')->nullable();
            $table->string('remark4')->nullable();
            $table->timestamps();

            $table->foreign('franchisee_id')->references('id')->on('franchisees');
            $table->foreign('studnt_id')->references('id')->on('students');
            $table->foreign('batch_id')->references('id')->on('batches');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
