<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcurementProcessesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurement_processes', function (Blueprint $table) {
            $table->increments('id');
            $table->date('purchaseDate');
            $table->string('articleName');
            $table->string('rate');
            $table->string('quantity');
            $table->string('totalPrice');
            $table->string('issued');
            $table->string('signReceivingPerson');
            $table->string('Remarks');
            $table->string('ddoSign');
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
        Schema::dropIfExists('procurement_processes');
    }
}
