<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUpdateInventoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('update_inventories', function (Blueprint $table) {
            $table->increments('id');
            $table->date('PurchaseDate');
            $table->string('articleName');
            $table->string('rate');
            $table->string('quantity');
            $table->string('price');
            $table->string('purchasedOut');
            $table->string('headofAC');
            $table->string('receivingSign');
            $table->string('remarks');
            $table->string('principalSign');
            $table->string('requisitionDetail');
            $table->string('billPassing');
            $table->string('adddeleteStock');
            $table->string('itemIssued');
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
        Schema::dropIfExists('update_inventories');
    }
}
