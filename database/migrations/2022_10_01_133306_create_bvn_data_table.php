<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bvn_data', function (Blueprint $table) {
            $table->string('id')->nullable();
            $table->string('Full_Name')->nullable();
            $table->string('Email')->nullable();
            $table->string('Gender')->nullable();
            $table->string('Lga_of_origin')->nullable();
            $table->string('Lga_of_residence')->nullable();
            $table->string('Marital_status')->nullable();
            $table->string('NIN')->nullable();
            $table->string('Nationality')->nullable();
            $table->string('State_of_origin')->nullable();
            $table->string('State_of_residence')->nullable();
            $table->string('Title')->nullable();
            $table->string('First_Name')->nullable();
            $table->string('Middle_Name')->nullable();
            $table->string('Last_Name')->nullable();
            $table->string('Registration_date')->nullable();
            $table->string('Enrollment_Bank')->nullable();
            $table->string('Enrollment_branch')->nullable();
            $table->string('Phone')->nullable();
            $table->string('DOB')->nullable();
            $table->string('Alternative_phone')->nullable();
            $table->string('Address_line_1')->nullable();
            $table->string('Address_line_2')->nullable();
            $table->string('Address_line_3')->nullable();
            $table->string('Account_level')->nullable();
            $table->string('Watchlisted')->nullable();
            $table->string('Avatar')->nullable();
            // $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bvn_data');
    }
};
