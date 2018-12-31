<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultyRewardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('faculty_rewards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('faculty_id');
            // $table->foreign('employee_id')->references('id')->on('facultyInfo');
            $table->string('reward');
            $table->date('date');
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
        Schema::dropIfExists('faculty_rewards');
    }
}
