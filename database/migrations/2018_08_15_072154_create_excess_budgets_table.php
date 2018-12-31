<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExcessBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('excess_budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DdoNo');
            $table->string('budgetYear');
            $table->string('description');
            $table->string('allocatedBudget');
            $table->string('released');
            $table->string('consumed');
            $table->string('excess');
            $table->string('surrender');
            $table->string('reallocation');
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
        Schema::dropIfExists('excess_budgets');
    }
}
