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
        Schema::table('loan_investors', function (Blueprint $table) {
          
          //  $table->unsignedBigInteger('investor_id');
            $table->foreign('investor_id')->references('id')->on('users');
            $table->foreign('loan_id')->references('id')->on('loan_products');
            
         
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('loan_investors', function (Blueprint $table) {
            //
        });
    }
};
