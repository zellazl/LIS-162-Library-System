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
        Schema::create('reqservices', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->unsignedBigInteger('user_id')->unsigned(); 
            $table->timestamps();
            $table->string('user_fullname');
            $table->date('service_date');
            $table->string('time_slot');
            $table->string('service_name');
            $table->string('transaction_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reqservices');
    }
};
