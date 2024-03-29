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
        Schema::create('loan_products', function (Blueprint $table) {
            $table->id();
            $table->string('loan_name');
            $table->double('interest', 15, 8)->nullable()->default(0.0);
            $table->double('min_interest')->unsigned()->nullable()->default(0);
            $table->double('max_interest')->unsigned()->nullable()->default(0);
            $table->integer('min_principal')->unsigned()->nullable()->default(0);
            $table->integer('max_principal')->unsigned()->nullable()->default(0);
            $table->string('investor_level_allowed')->nullable();
            $table->string('student_level_allowed')->nullable();
            $table->boolean('is_latefee_allowed')->nullable();
            $table->integer('latefee_interest')->nullable();
            $table->integer('loan_tenor')->nullable();
            $table->string('repayment_interval')->nullable();
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
        Schema::dropIfExists('loan_products');
    }
};
