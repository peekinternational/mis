<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateContractorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contractors', function (Blueprint $table) {
            $table->increments('id');
            $table->string('contractorName');
            $table->string('amountPerMonth');
            $table->string('periodFrom');
            $table->string('contractorCNIC');
            $table->string('address');
            $table->string('phoneNo');
            $table->string('amountReceivedDate');
            $table->string('finalPayment');
            $table->string('issuedReceiptNo');
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
        Schema::dropIfExists('contractors');
    }
}
