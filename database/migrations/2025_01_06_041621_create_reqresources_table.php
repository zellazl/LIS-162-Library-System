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
        Schema::create('reqresources', function (Blueprint $table) {
            $table->id();
            $table->foreign('user_id')->references('id')->on('users'); 
            $table->unsignedBigInteger('user_id')->unsigned(); 
            $table->timestamps();
            $table->softDeletes();
            $table->string('user_fullname');
            $table->date('claim_date');
            $table->string('resource_title');
            $table->string('resource_author');
            $table->string('resource_accession_number');
            $table->string('transaction_status')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reqresources');
    }
};
