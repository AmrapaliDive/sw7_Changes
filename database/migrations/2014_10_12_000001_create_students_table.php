<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('fathers_name');
            $table->string('fathers_occupation');
            $table->string('fathers_income');
            $table->string('mothers_name');
            $table->string('mothers_occupation');
            $table->string('mothers_income');
            $table->text('permanent_address');
            $table->string('pincode');
            $table->string('parent_contact');
            $table->string('student_contact');
            $table->string('nationality');  
            $table->string('state');  
            $table->string('aadhar_no');        
            $table->string('gender');        

            $table->string('tenth_school');
            $table->string('tenth_board');
            $table->string('tenth_passingyear');
            $table->string('tenth_percentage');
            $table->string('tenth_doc');

            $table->string('twelth_school');
            $table->string('twelth_board');
            $table->string('twelth_passingyear');
            $table->string('twelth_percentage');
            $table->string('twelth_doc');

            $table->string('graduate_school');
            $table->string('graduate_board');
            $table->string('graduate_passingyear');
            $table->string('graduate_percentage');
            $table->string('graduate_doc');

            $table->string('passport_image');
            $table->string('remark1')->nullable();
            $table->string('remark2')->nullable();
            $table->string('remark3')->nullable();
            $table->string('remark4')->nullable();
            $table->string('remark5')->nullable();
            $table->integer('user_id')->unsigned();
            $table->string('password');
            $table->rememberToken();
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
        Schema::dropIfExists('students');
    }
}
