<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFtfCollectionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ftf_collections', function (Blueprint $table) {
            $table->increments('id');
            $table->string('stdName');
            $table->string('rollNo');
            $table->string('admisssionNo');
            $table->string('month');
            $table->string('receivedFunds');
            $table->string('total');
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
        Schema::dropIfExists('ftf_collections');
    }
}
