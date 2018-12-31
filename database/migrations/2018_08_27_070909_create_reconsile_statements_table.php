<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateReconsileStatementsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reconsile_statements', function (Blueprint $table) {
            $table->increments('id');
            $table->string('month');
            $table->string('class');
            $table->string('noOfStudent');
            $table->string('fundCollection');
            $table->string('totalFund');
            $table->string('inchargeName');
            $table->string('preparedBy');
            $table->string('verifiedBy');
            $table->string('principalName');
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
        Schema::dropIfExists('reconsile_statements');
    }
}
