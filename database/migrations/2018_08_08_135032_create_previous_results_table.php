<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePreviousResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('previous_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('class');
            $table->string('school');
            $table->string('rollNo');
            $table->string('year');
            $table->string('subject');
            $table->string('totalMarks');
            $table->string('obtMarks');
            $table->string('position');
            $table->string('remarks');
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
        Schema::dropIfExists('previous_results');
    }
}
