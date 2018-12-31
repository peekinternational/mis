<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBookListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->date('date');
            $table->string('bookTitle');
            $table->string('authorName');
            $table->string('publisherAddress');
            $table->date('publishDate');
            $table->string('totalPages');
            $table->string('price');
            $table->string('sellerName');
            $table->string('ISBN');
            $table->string('remarks');
            $table->string('description');
            $table->string('membershipRecord');
            $table->string('totalBooks');
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
        Schema::dropIfExists('book_lists');
    }
}
