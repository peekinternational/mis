<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFacultiesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('facultyInfo', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('fatherName');
            $table->string('cnicNumber');
            $table->string('designation');
            $table->string('basicScale');
            $table->string('dob');
            $table->string('domicile');
            $table->string('qualification');
            $table->string('serviceEntryDate');
            $table->string('firstOrderNo');
            $table->string('presentJoiningDate');
            $table->string('orderNo');
            $table->string('districtJoiningDate');
            $table->string('selectionGrade');
            $table->string('jobType');
            $table->string('procedure');
            $table->string('personalNo');
            $table->string('gpfNo');
            $table->string('ntnNumber');
            $table->string('bankAccNo');
            $table->string('bankName');
            $table->string('branchCode');
            $table->string('bankContact');
            $table->string('bankEmail');
            $table->string('homeAddress');
            $table->string('schoolName');
            $table->string('schoolAddress');
            $table->string('emisCode');
            $table->string('ucName');
            $table->string('ppNo');
            $table->string('Na');
            $table->string('tehsil');
            $table->string('district');
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
        Schema::dropIfExists('facultyInfo');
    }
}
