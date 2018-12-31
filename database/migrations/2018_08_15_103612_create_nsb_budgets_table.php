<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNsbBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nsb_budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('DdoNo');
            $table->string('budgetYear');
            $table->string('description');
            $table->string('estimatedBudget');
            $table->string('allocatedBudget');
            $table->string('released');
            $table->string('consumed');
            $table->string('balance');
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
        Schema::dropIfExists('nsb_budgets');
    }
}
