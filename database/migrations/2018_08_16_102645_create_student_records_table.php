<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStudentRecordsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('student_records', function (Blueprint $table) {
            $table->increments('id');
            $table->string('studentName');
            $table->string('fatherName');
            $table->string('dob');
            $table->string('admissionNo');
            $table->string('rollNo');
            $table->string('class');
            $table->string('attendanceDuringYear');
            $table->string('maxAttendance');
            $table->string('homeAddress');
            $table->string('stdPhoto');
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
        Schema::dropIfExists('student_records');
    }
}
