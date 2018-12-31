<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProcurementDocumntsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('procurement_documnts', function (Blueprint $table) {
            $table->increments('id');
            $table->string('demand');
            $table->string('description');
            $table->string('tender');
            $table->string('quotationComparison');
            $table->string('finalizedQuotation');
            $table->string('amount');
            $table->string('advancePayment');
            $table->string('deliveryDate');
            $table->string('invoiceNo');
            $table->string('finalPayment');
            $table->string('cashReceiptNo');
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
        Schema::dropIfExists('procurement_documnts');
    }
}
