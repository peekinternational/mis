<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContingentBudgetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contingent_budgets', function (Blueprint $table) {
            $table->increments('id');
            $table->string('conDdoNo');
            $table->string('conBudgetYear');
            $table->string('conDescription');
            $table->string('conEstimatedBudget');
            $table->string('conAllocatedBudget');
            $table->string('conReleased');
            $table->string('conConsumed');
            $table->string('conBalance');
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
        Schema::dropIfExists('contingent_budgets');
    }
}
