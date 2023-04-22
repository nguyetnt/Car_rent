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
        Schema::create('report', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->unsignedBigInteger('order_id');
            $table->foreign('order_id')->references('id')->on('order');
            $table->unsignedBigInteger('rental_id');
            $table->foreign('rental_id')->references('id')->on('rental');
            $table->date('report_date');

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
