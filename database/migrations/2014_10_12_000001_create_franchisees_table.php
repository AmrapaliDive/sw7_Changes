<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFranchiseesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('franchisees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->string('email')->unique();
            $table->string('contact1');
            $table->string('contact2');
            $table->string('landline_no');
            $table->date('dob');
            $table->text('address');
            $table->text('landmark');
            $table->string('city');
            $table->string('pincode');
            $table->string('qualification');
            $table->string('qualification_pdf');
            $table->string('profile_image');
             $table->string('verify');
            $table->string('contact_person');
            $table->string('contact_person_contact');
            $table->string('office_time');
            $table->text('description');
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
        Schema::dropIfExists('franchisees');
    }
}
