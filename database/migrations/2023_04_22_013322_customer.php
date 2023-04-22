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
        //
        Schema::create('customer', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string('fname');
            $table->string('lname');
            $table->string('gender');
            $table->integer('age');
            $table->string('address');
            $table->string('phonenumber');
            $table->string('email');
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
