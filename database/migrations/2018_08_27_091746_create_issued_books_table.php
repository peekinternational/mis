<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateIssuedBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('issued_books', function (Blueprint $table) {
            $table->increments('id');
            $table->string('bookTitle');
            $table->string('authorName');
            $table->string('accessionNo');
            $table->date('issueDate');
            $table->string('borrowerCardNo');
            $table->string('borrowerSign');
            $table->date('returnDate');
            $table->date('renewalDate');
            $table->string('librarianSign');
            $table->string('delayedDays');
            $table->string('fine');
            $table->string('receiptNo');
            $table->string('librarianInitials');
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
        Schema::dropIfExists('issued_books');
    }
}
