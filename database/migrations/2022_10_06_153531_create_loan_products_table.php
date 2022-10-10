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
            $table->integer('min_repayment_day')->unsigned()->nullable()->default(0);
            $table->integer('max_repayment_day')->unsigned()->nullable()->default(0);
            $table->integer('min_principal')->unsigned()->nullable()->default(0);
            $table->integer('max_principal')->unsigned()->nullable()->default(0);
            $table->integer('trust_level')->unsigned()->nullable()->default(0);           
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
