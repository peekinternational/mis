<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAdmissionInquiriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('admission_inquiries', function (Blueprint $table) {
            $table->increments('inquiryId');
            $table->string('stdName');
            $table->string('fatherName');
            $table->string('address')->nullable();
            $table->string('phoneNo')->nullable();
            $table->string('AdmissionSought');
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
        Schema::dropIfExists('admission_inquiries');
    }
}
