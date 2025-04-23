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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('user_id');
            $table->time('time');
            $table->time('end_time')->nullable();
            $table->Integer('no_of_seats')->nullable();
            $table->string('name');
            $table->string('email');
            $table->string('mobile')->nullable();
            $table->string('special_note')->nullable();
            $table->string('table')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
