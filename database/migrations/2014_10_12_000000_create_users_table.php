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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('user_type');
            $table->boolean('is_verified')->default(0);
            $table->integer('kyc_level')->default(0);
            $table->string('job_type')->nullable();
            $table->string('matric_number')->nullable();
            $table->string('bvn')->nullable();
            $table->string('date_of_birth')->nullable();
            $table->integer('trust_level')->nullable(); 
            $table->boolean('is_contact_updated')->default(0);
            $table->boolean('is_school_updated')->default(0);
            $table->boolean('is_personalInfo_updated')->default(0); 
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
};
