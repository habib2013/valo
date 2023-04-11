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
        Schema::create('create_loans', function (Blueprint $table) {
            $table->id();
            $table->string('loan_title')->nullable();
            $table->string('investor_level_allowed')->nullable();
            $table->string('student_level_allowed')->nullable();
            $table->string('min_interest')->nullable();
            $table->string('max_interest')->nullable();
            $table->boolean('is_latefee_allowed')->nullable();
            $table->integer('latefee_interest')->nullable();
            $table->integer('loan_tenor')->nullable();
            $table->integer('repayment_interval')->nullable();
            
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
        Schema::dropIfExists('create_loans');
    }
};
