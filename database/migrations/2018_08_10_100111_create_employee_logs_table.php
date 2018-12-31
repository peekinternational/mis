<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('employee_logs', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faculty_id')->unsigned();
            $table->foreign('faculty_id')->references('id')->on('facultyInfo');
            $table->string('professionalQualification');
            $table->string('courseName');
            $table->string('courseVenu');
            $table->string('courseDate');
            $table->string('courseDuration');
            $table->string('conductedBy');
            $table->string('taskDate');
            $table->string('task');
            $table->string('duration');
            $table->string('taskStatus');
            $table->string('comments');
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
        Schema::dropIfExists('employee_logs');
    }
}
