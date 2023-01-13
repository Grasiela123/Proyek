<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryDonationTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_donation', function (Blueprint $table) {
            $table->id();
            $table->foreignId('donation_id');
            //->references('id')->on('donations')->onDelete('cascade');
            $table->foreignId('category_id');
            //->references('id')->on('categories')->onDelete('cascade');

        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_donation');
    }
}
