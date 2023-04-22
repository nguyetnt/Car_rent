<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('order', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('order_name');
            $table->integer('rental_id');
            $table->unsignedBigInteger('car_id');
            $table->foreign('car_id')->references('id')->on('car');
            $table->unsignedBigInteger('customer_id');
            $table->foreign('customer_id')->references('id')->on('customer');
            $table->unsignedBigInteger('admin_id');
            $table->foreign('admin_id')->references('id')->on('admin');
            $table->date('order_date');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
