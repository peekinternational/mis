<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRegistrationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_registrations', function (Blueprint $table) {
            $table->increments('id');
            // $table->string('stdtId');
            $table->string('stdName');
            $table->string('stdCnic')->unique();
            $table->string('stdPhone')->unique()->nullable();
            $table->string('stdDob');
            $table->string('stdPhoto');
            $table->string('stdNationality');
            $table->string('stdCaste');
            $table->string('stdReligion');
            $table->string('stdFatherProfession');
            $table->string('admissionNo')->unique();
            $table->string('admissionDate');
            $table->string('admittedInClass');
            $table->string('rollNo')->unique();
            $table->string('regsNumber1')->unique()->nullable();
            $table->string('regsNumber2')->unique()->nullable();
            $table->string('leavingDate');
            $table->string('reasonOfLeaving');
            $table->string('lastAttendedClass');
            $table->string('fatherName');
            $table->string('fatherCnic');
            $table->string('fatherPhone');
            $table->string('fatherAddress');
            $table->string('motherName');
            $table->string('motherCnic');
            $table->string('motherPhone');
            $table->string('motherAddress');
            $table->string('guardianName');
            $table->string('guardianCnic');
            $table->string('guardianPhone');
            $table->string('guardianAddress');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('student_registrations');
    }
}
