<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNegativeBehavioursTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('negative_behaviours', function (Blueprint $table) {
            $table->increments('id');
            $table->date('incidentDate');
            $table->string('lessonPeriod')->nullable();
            $table->string('lessonStyle')->nullable();
            $table->string('seatingPlan')->nullable();
            $table->string('workType')->nullable();
            $table->string('reportingStaff');
            $table->string('coveringStaff');
            $table->string('location');
            $table->string('studentName');
            $table->string('behaviourType');
            $table->string('comments');
            $table->string('actionTaken');

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
        Schema::dropIfExists('negative_behaviours');
    }
}
